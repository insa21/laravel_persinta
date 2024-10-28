<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', fn() => view('about'));
Route::get('/contact', fn() => view('contact'));
Route::get('/gallery', fn() => view('gallery'));


Route::get('users', function () {
    $users = [
        ['name' => 'John', 'age' => 25],
        ['name' => 'Jane', 'age' => 30],
        ['name' => 'Bob', 'age' => 35],
    ];

    return view('users.index', compact('users'));
});
