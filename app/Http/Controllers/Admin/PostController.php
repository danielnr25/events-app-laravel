<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('blog', 'show', 'search');
    }

    public function index()
    {
        $user = Auth::user();
        $posts = $user->posts()->oldest()->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id');
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'extract' => 'required',
            'description' => 'required',
            'imagen' => 'required',
            'category_id' => 'required',
        ]);

        $imagePath = null;
        if ($request->file('imagen')) {
            $file = $request->file('imagen');
            $path = Storage::putFile('public/posts', $file);
            $new_path = str_replace('public/', '', $path);
            $imagePath = $new_path;
        }

        $title = ucfirst($request->title);

        $post = Post::create([
            'title' => $title,
            'slug' => $request->slug,
            'extract' => $request->extract,
            'description' => $request->description,
            'imagen' => $imagePath,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id,
        ]);

        $post->categories()->attach($request->category_id);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post creado correctamente');
    }

    public function edit(Post $post)
    {
        $categories = Category::pluck('title', 'id');
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    public function update(Request $request, Post $post)
    {
        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'extract' => 'required',
            'description' => 'required',
        ]);


        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior
            if ($post->imagen && Storage::exists('public/' . $post->imagen)) {
                Storage::delete('public/' . $post->imagen);
            }

            // Procesar y guardar la nueva imagen con un nombre único
            $file = $request->file('imagen');
            $imageName = now()->format('Y-m-d_H-i-s') . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/posts', $imageName);
            $newPath = str_replace('public/', '', $path);

            $post->imagen = $newPath;
        }

        $post->title = ucfirst($request->title);
        $post->slug = $request->slug;
        $post->extract = $request->extract;
        $post->description = $request->description;
        $post->save();

        $post->categories()->sync($request->category_id);

        return redirect()->route('dashboard.posts.index')->with('success', 'Post actualizado correctamente');
    }

    public function destroy(Post $post)
    {
        if ($post->published == 'ACTIVE') {
            $post->update(['published' => 'INACTIVE']);
            return redirect()->route('dashboard.posts.index')->with('success', 'Post desactivado correctamente');
        } else {
            $post->update(['published' => 'ACTIVE']);
            return redirect()->route('dashboard.posts.index')->with('success', 'Post activado correctamente');
        }
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('layouts.posts.show', compact('post'));
    }

    public function blog()
    {
        $posts = Post::oldest('id')->paginate(6);
        return view('blog', compact('posts'));
    }

    public function search(Request $request)
    {
        $searchI = $request->input('search');
        $posts = Post::where('title', 'like', '%' . $searchI . '%')
            ->orWhereHas('categories', function ($query) use ($searchI) {
                $query->where('title', 'like', '%' . $searchI . '%');
            })
            ->latest('id')
            ->paginate(3);

        return view('blog', compact('posts'));
    }
}
