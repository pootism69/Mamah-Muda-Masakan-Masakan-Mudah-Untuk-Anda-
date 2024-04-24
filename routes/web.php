<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sesi', [SessionController::class,'index']);
Route::post('/sesi/login', [SessionController::class,'login']);
Route::get('/register', [SessionController::class,'register']);
Route::post('/register/create', [SessionController::class,'create']);