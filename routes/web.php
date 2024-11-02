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

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user:id}', [UserController::class, 'show']);
Route::get('/users/{user:id}/edit', [UserController::class, 'edit']);
Route::put('/users/{user:id}', [UserController::class, 'update']);



Route::get('/articles/create', [ArticleController::class, 'create']);
