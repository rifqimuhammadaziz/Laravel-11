<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', fn() => view('home'));
Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/gallery', fn() => view('gallery'));

Route::get('users', function() {
    $users = [
        ['id' => 1, 'name' => 'Rifqi Muhammad', 'email' => 'testing@gmail.com'],
        ['id' => 2, 'name' => 'Andy', 'email' => 'testing@gmail.com'],
    ];

    return view('users.index', compact('users'));
});
