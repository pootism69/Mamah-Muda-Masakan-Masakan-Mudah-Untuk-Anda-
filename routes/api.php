<?php
use App\Http\Controllers\RecipeController;
use Illuminate\Http\Request;

use App\Http\Controllers\AkunController;
use App\Http\Controllers\AsalController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('resep/{filter}', [RecipeController::class, 'infoApi']);
Route::get('/akun', [SessionController::class, 'akunApi']);
Route::get('/searchUser/{request?}', [SearchController::class,'SearchUserAPI']);
Route::get('/searchResep/{request?}', [SearchController::class,'SearchResepAPI']);

Route::get('/year/{filter?}', [AsalController::class, 'tahunApi']);
Route::get('/asal/{filter?}', [AsalController::class, 'asalApi']);
Route::get('/category/{filter}', [AsalController::class, 'categoryApi']);
Route::get('/userResep/{filter}', [AsalController::class, 'userApiResep']);
Route::get('/user/{filter}', [AsalController::class, 'userApi']);


Route::post('/post', [RecipeController::class,'createApi']);
Route::delete('/delete-resep/{filter}', [RecipeController::class, 'destroyApi']);
Route::put('/resep/{filter}/edit', [RecipeController::class, 'editApi']);

Route::middleware([EnsureFrontendRequestsAreStateful::class])
    ->group(function () {
        Route::post('/login', [SessionController::class,'loginApi']);
        Route::post('/register', [SessionController::class,'createApi']);
        Route::get('/logout', [SessionController::class,'logoutApi']);
    });
