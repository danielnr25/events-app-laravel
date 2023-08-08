<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('event', 'show', 'byCategory', 'search');
    }

    public function event()
    {
        $events = Event::oldest('id')->paginate(6);
        return view('event', compact('events'));
    }

    public function search(Request $request)
    {

        $searchTerm = $request->input('search');
        $events = Event::where('title', 'like', '%' . $searchTerm . '%')
            ->orWhereHas('categories', function ($query) use ($searchTerm) {
                $query->where('title', 'like', '%' . $searchTerm . '%');
            })
            ->latest('id')
            ->paginate(3);

        return view('event', compact('events'));
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();
        return view('layouts.events.show', compact('event'));
    }

    public function index()
    {
        $user = Auth::user();
        $events = $user->events()->oldest()->paginate(5);
        return view('admin.events.index', compact('events'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id');
        return view('admin.events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:events',
            'extract' => 'required',
            'description' => 'required',
            'imagen' => 'required',
            'price' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'contact' => 'required',
            'web' => 'required',
            'category_id' => 'required',
        ]);

        $imagePath = null;
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $path = Storage::putFile('public/events', $file);
            $new_path = str_replace('public/', '', $path);
            $imagePath = $new_path;
        }
        $title = ucfirst($request->title);

        $event = Event::create([
            'title' => $title,
            'slug' => $request->slug,
            'extract' => $request->extract,
            'description' => $request->description,
            'imagen' => $imagePath,
            'price' => $request->price,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'contact' => $request->contact,
            'web' => $request->web,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);

        $event->categories()->attach($request->category_id);

        return redirect()->route('dashboard.events.index')->with('success', 'Evento creado correctamente');
    }

    public function edit(Event $event)
    {
        $categories = Category::pluck('title', 'id');
        return view('admin.events.edit', compact('event', 'categories'));
    }

    public function update(Request $request, Event $event)
    {

        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:events,slug,' . $event->id,
            'extract' => 'required',
            'description' => 'required',
            'price' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'contact' => 'required',
            'web' => 'required',
        ]);

        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior
            if ($event->imagen && Storage::exists('public/' . $event->imagen)) {
                Storage::delete('public/' . $event->imagen);
            }

            // Procesar y guardar la nueva imagen con un nombre único
            $file = $request->file('imagen');
            $imageName = now()->format('Y-m-d_H-i-s') . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/events', $imageName);
            $newPath = str_replace('public/', '', $path);

            $event->imagen = $newPath;
        }

        $event->title = ucfirst($request->title);
        $event->slug = $request->slug;
        $event->extract = $request->extract;
        $event->description = $request->description;
        $event->price = $request->price;
        $event->phone = $request->phone;
        $event->address = $request->address;
        $event->city = $request->city;
        $event->contact = $request->contact;
        $event->web = $request->web;
        $event->save();


        $event->categories()->sync($request->category_id);

        return redirect()->route('dashboard.events.index')->with('success', 'Evento actualizado correctamente');
    }

    public function destroy(Event $event)
    {
        if ($event->published == 'ACTIVE') {
            $event->update(['published' => 'INACTIVE']);
            return redirect()->route('dashboard.events.index')->with('success', 'Evento desactivado correctamente');
        } else {
            $event->update(['published' => 'ACTIVE']);
            return redirect()->route('dashboard.events.index')->with('success', 'Evento activado correctamente');
        }
    }


    public function byCategory(Category $category, $slug)
    {

        $category = Category::where('slug', $slug)->firstOrFail();
        $events = Event::Filtered($category);
        return view('layouts.events.category.by_category', compact('category', 'events'));
    }
}
