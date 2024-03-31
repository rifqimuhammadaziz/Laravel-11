<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'welcome');

Route::get('/', fn() => view('home'));
Route::get('/contact', fn() => view('contact'));

Route::get('users', function() {
    $users = [
        ['id' => 1, 'name' => 'Rifqi Muhammad'],
        ['id' => 2, 'name' => 'Andy'],
    ];

    return $users;
});
