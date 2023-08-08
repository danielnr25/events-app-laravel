<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::oldest()->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required|unique:categories',
            'slug' => 'required|unique:categories',
            'image' => 'required',
        ]);

        $imagePath = null;
        if ($request->file('image')) {
            $file = $request->file('image');
            $path = Storage::putFile('public/categories', $file);
            $new_path = str_replace('public/', '', $path);
            $imagePath = $new_path;
        }
        $title = ucfirst($request->title);

        Category::create([
            'title' => $title,
            'slug' => $request->slug,
            'image' => $imagePath,
        ]);

        return redirect()->route('dashboard.categories.index')->with('success', 'Categoria creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->request->add(['slug' => Str::slug($request->slug)]);
        $request->validate([
            'title' => 'required|unique:categories,title,' . $category->id,
            'slug' => 'required|unique:categories,slug,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,wepb|max:2048', // Permitir imagen, pero no requerirla

        ]);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior
            if ($category->image && Storage::exists('public/' . $category->image)) {
                Storage::delete('public/' . $category->image);
            }

            // Procesar y guardar la nueva imagen con un nombre único
            $file = $request->file('image');
            $imageName = now()->format('Y-m-d_H-i-s') . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/categories', $imageName);
            $newPath = str_replace('public/', '', $path);

            $category->image = $newPath;
        }

        $title = ucfirst($request->title);

        // Actualizar los otros campos
        $category->title = $title;
        $category->slug = $request->slug;
        $category->save();

        return redirect()->route('dashboard.categories.index')->with('success', 'Categoria modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
