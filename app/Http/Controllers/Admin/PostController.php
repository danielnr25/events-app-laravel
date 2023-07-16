<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('layouts.posts.show');
    }

    public function create()
    {
        return view('admin.posts.index');
    }

    public function store(){
        return view('admin.posts.create');
    }

    public function edit(){
        return view('layouts.posts.show');
    }

    public function update(){
        return view('layouts.posts.show');
    }

    public function destroy(){
        return view('layouts.posts.show');
    }

    public function show(){
        return view('admin.posts.create');
    }
}
