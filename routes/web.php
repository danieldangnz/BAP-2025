<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('dashboard');
});

// Show forms
Route::get('/login', [UserController::class, 'loginForm'])->name('login');
Route::get('/signup', [UserController::class, 'registrationForm'])->name('register');
Route::post('/login', [UserController::class, 'login']);
Route::post('/signup', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');