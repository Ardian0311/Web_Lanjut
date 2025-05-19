<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

// Route untuk halaman kontak
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']); 

// Route untuk menampilkan form user
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Route untuk menyimpan data user dari form
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::resource('user', UserController::class);
Route::resource('product', ProductController::class);