<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginController;

Route::get('/', HomeController::class);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

//todo: Cara Cepat tanpa harus mendefinisikan satu per satu
Route::resource('users', UserController::class)->middleware('auth');

//todo: Harus di definisikan setiap route secara individual
//Route::get('/users', [UserController::class, 'index'])->name('users.index');
//Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//Route::post('/users', [UserController::class, 'store'])->name('users.store');
//Route::get('/users/{user:id}', [UserController::class, 'show'])->name('users.show');
//Route::get('/users/{user:id}/edit', [UserController::class, 'edit'])->name('users.edit');
//Route::put('/users/{user:id}', [UserController::class, 'update'])->name('users.update');
//Route::delete('/users/{user:id}', [UserController::class, 'destroy'])->name('users.destroy');


Route::get('/login', [LoginController::class, 'loginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', LogoutController::class, 'logout')->name('logout')->middleware('auth');


Route::get('/articles/create', [ArticleController::class, 'create']);
