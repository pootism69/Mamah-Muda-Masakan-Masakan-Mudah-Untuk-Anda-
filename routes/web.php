<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AsalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home']);

Route::get('/sesi', [SessionController::class,'index']);
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/register', [SessionController::class,'register'])->name('register');
Route::post('/register/create', [SessionController::class,'create']);
Route::get('/sesi/logout', [SessionController::class,'logout']);
Route::get('/edit-account', [SessionController::class, 'edit'])->name('edit.account');
Route::put('/update-account', [SessionController::class, 'update'])->name('update.account');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/homepage', [SessionController::class, 'home']);

Route::get('/akun', [SessionController::class, 'akun'])->name('akun');
Route::get('/search', [SearchController::class,'search']);
Route::get('/year/{filter}', [AsalController::class, 'tahun'])->name('year');
Route::get('/asal/{filter}', [AsalController::class, 'asal'])->name('asal');
Route::get('/category/{filter}', [AsalController::class, 'category'])->name('category');
Route::get('/resep/{filter}', [RecipeController::class, 'info'])->name('resep');
Route::get('/user/{filter}', [AsalController::class, 'user'])->name('user');
Route::post('/resep/{filter}/createReview', [RecipeController::class,'createReview']);
Route::delete('/delete-resep/{filter}', [RecipeController::class, 'destroy'])->name('delete.resep');

Route::get('/post', [RecipeController::class,'post'])->name('post');
Route::post('/post/create', [RecipeController::class,'create']);



