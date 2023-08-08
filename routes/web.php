<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;


// Routs view
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
Route::view('/faq', 'faq')->name('faq');

Route::get('/categoria/{slug}', [EventController::class, 'byCategory'])->name('category');
// Routs event
Route::group(['prefix' => 'eventos', 'as' => 'eventos.'], function () {
    Route::get('/', [EventController::class, 'event'])->name('event');
    Route::get('/search', [EventController::class, 'search'])->name('search');
    Route::get('/{slug}', [EventController::class, 'show'])->name('show');
});


Route::get('/blog', [PostController::class, 'blog'])->name('post');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/search', [PostController::class, 'search'])->name('blog.search');

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


Route::middleware(['auth'])->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::resource('/users', UserController::class);
    Route::resource('/events', EventController::class);
    Route::resource('/posts', PostController::class);
    Route::resource('/categories', CategoryController::class);
});


// ROUTES POSTS
