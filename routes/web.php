<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', Controllers\HomeController::class);
Route::get('/about', [Controllers\AboutController::class, 'index']);
Route::get('/contact', [Controllers\ContactController::class, 'index']);
Route::get('/gallery', [Controllers\GalleryController::class, 'index']);
Route::get('/users', [Controllers\UserController::class, 'index']);

//Route::get('users', function() {
//    $users = [
//        ['id' => 1, 'name' => 'Rifqi Muhammad', 'email' => 'testing@gmail.com'],
//        ['id' => 2, 'name' => 'Andy', 'email' => 'testing@gmail.com'],
//    ];
//
//    return view('users.index', compact('users'));
//});
