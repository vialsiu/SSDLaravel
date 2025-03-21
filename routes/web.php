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

//artists
Route::get('/artists', [PagesController::class, 'artists'])->name('artist.index');
//contact
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'submitContactForm'])->name('contact.submit');

// Authenticated User Dashboard
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

// Contact Page Route (Fix for "Route [contact] not defined")
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


//quiz
Route::get('/quiz', function () {
    return view('quiz');
});

