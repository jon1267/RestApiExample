<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainLibPageController;

Route::get('/', [MainLibPageController::class, 'index']);


//Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
