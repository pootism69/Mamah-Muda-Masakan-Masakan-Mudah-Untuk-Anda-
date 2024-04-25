<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'home']);

Route::get('/sesi', [SessionController::class,'index']);
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/register', [SessionController::class,'register'])->name('register');
Route::post('/register/create', [SessionController::class,'create']);

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/homepage', [SessionController::class, 'home']);

Route::get('/akun', [AkunController::class, 'akun'])->name('akun');

