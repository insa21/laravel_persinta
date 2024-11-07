<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;

Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

//Cara Cepat tanpa harus mendefinisikan satu per satu
Route::resource('users', UserController::class);

//Route::get('/users', [UserController::class, 'index'])->name('users.index');
//Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//Route::post('/users', [UserController::class, 'store'])->name('users.store');
//Route::get('/users/{user:id}', [UserController::class, 'show'])->name('users.show');
//Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('users.edit');
//Route::put('/users/{user:id}', [UserController::class, 'update'])->name('users.update');
//Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');



Route::get('/articles/create', [ArticleController::class, 'create']);
