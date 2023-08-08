<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::withCount("events")->get();
        return view('home', compact('categories'));
    }
}
