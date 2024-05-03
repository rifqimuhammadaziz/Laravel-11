<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::resource('users', UserController::class);
// Route::get('/users', [Controllers\UserController::class, 'index'])->name('users.index');
// Route::get('/users/create', [Controllers\UserController::class, 'create'])->name('users.create');
// Route::post('/users', [Controllers\UserController::class, 'store'])->name('users.store');
// Route::get('/users/{user:id}', [UserController::class, 'show'])->name('users.show');
// Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('users.edit');
// Route::put('/users/{user:id}', [UserController::class, 'update'])->name('users.update');
// Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/articles/create', [ArticleController::class, 'create']);