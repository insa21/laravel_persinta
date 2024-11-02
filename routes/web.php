<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);


// Route::get('users', function () {
//     $users = [
//         ['name' => 'John', 'age' => 25],
//         ['name' => 'Jane', 'age' => 30],
//         ['name' => 'Bob', 'age' => 35],
//     ];

//     return view('users.index', compact('users'));
// });
