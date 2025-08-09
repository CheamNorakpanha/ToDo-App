<?php

use App\Http\Controllers\TaskManager;
use Illuminate\Support\Facades\Route;

// Login routes
Route::get('login', [App\Http\Controllers\AuthManager::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthManager::class, 'loginPost'])->name('login.post');

// Register routes
Route::get('register', [App\Http\Controllers\AuthManager::class, 'register'])->name('register');
Route::post('register', [App\Http\Controllers\AuthManager::class, 'registerPost'])->name('register.post');

// Task management routes
Route::middleware('auth')->group(function (){

    // Home route
    Route::get('/', [TaskManager::class, "listTask"])->name('home');

    // Task routes
    Route::get('task/add', [TaskManager::class, "addTask"])->name('task.add');
    Route::post('task/add', [TaskManager::class, "addTaskPost"])->name('task.add.post');

});
