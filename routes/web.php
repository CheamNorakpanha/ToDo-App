<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Login routes
Route::get('login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');

// Register routes
Route::get('register', [App\Http\Controllers\AuthManager::class, 'register'])->name('register');
Route::post('register', [App\Http\Controllers\AuthManager::class, 'registerPost'])->name('register.post');
