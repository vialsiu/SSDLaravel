<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Public Homepage (Guests & Users)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog Routes
Route::resource('/blog', PostsController::class);

// Authentication Routes
Auth::routes();

// Authenticated User Dashboard
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Contact Page Route (Fix for "Route [contact] not defined")
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

