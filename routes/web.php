<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;




// Routs view
Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');

// Routs event
Route::get('/eventos', [EventController::class, 'event'])->name('events');
Route::group(['prefix' => 'eventos', 'as' => 'eventos.'], function (){
    Route::get('/', [EventController::class, 'event'])->name('events');

});



//login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//logout
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// ROUTES PROFILE
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// ROUTES DASHBOARD
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ROUTES POSTS
Route::get('/blog', [PostController::class, 'index'])->name('posts');
Route::get('/posts', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
