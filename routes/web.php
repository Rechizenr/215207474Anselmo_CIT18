<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;

// Home route
Route::get('/', function () {
    return view('welcome');
});

// Notes CRUD routes
Route::resource('notes', NoteController::class);
Route::get('/notes', [NoteController::class, 'index'])->name('notes');

// User Registration Routes
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [UserController::class, 'register'])->name('register');

// User Login Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'login'])->name('login');

Route::get('/logout', function () {
    return view('logout');
})->middleware('auth')->name('logout.view');

Route::post('/logout', [UserController::class, 'logout'])->name('logout');
