<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);

Route::get('/users', [Controllers\UserController::class, 'index']);
Route::get('/users/create', [Controllers\UserController::class, 'create']);
Route::post('/users', [Controllers\UserController::class, 'store']);
Route::get('/users/{user:id}', [UserController::class, 'show']);
Route::get('/users/{user:id}/edit', [UserController::class, 'edit']);
Route::put('/users/{user:id}', [UserController::class, 'update']);
Route::delete('/users/{user:id}', [UserController::class, 'destroy']);


Route::get('/articles/create', [ArticleController::class, 'create']);
