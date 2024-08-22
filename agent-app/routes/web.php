<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('users',[UserController::class, 'index']);
Route::post('users-login',[UserController::class, 'login'])->name('login');
Route::post('users-register',[UserController::class, 'register'])->name('register');
// Route::get('users',[UserController::class, 'index']);