<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;
use App\Http\Controllers\API\ApiAuthController;

//Route::resource('books', BookController::class); //all this routes public

// public routes
Route::post('/register', [ApiAuthController::class, 'register']);
Route::post('/login', [ApiAuthController::class, 'login']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books/search/{name}', [BookController::class, 'search']);

// protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
    Route::post('/logout', [ApiAuthController::class, 'logout']);
});

// from fresh laravel route
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
