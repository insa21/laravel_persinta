<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);


// Route::get('users', function () {
//     $users = [
//         ['name' => 'John', 'age' => 25],
//         ['name' => 'Jane', 'age' => 30],
//         ['name' => 'Bob', 'age' => 35],
//     ];

//     return view('users.index', compact('users'));
// });
