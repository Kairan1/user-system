<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('/register', [UserController::class, 'store']);
Route::post('/search', [UserController::class, 'search']);
Route::get('/delete/{id}', [UserController::class, 'delete']);