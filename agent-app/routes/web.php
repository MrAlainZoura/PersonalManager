<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('users',[UserController::class, 'index']);
Route::post('users-login',[UserController::class, 'loginwith'])->name('login');
Route::post('users-register',[UserController::class, 'register'])->name('register');
Route::get('users',[UserController::class, 'index']);

Route::group(['middleware'=>'userAdmin'], function(){
    Route::get('/dashboard', function () {
    return view('auth.dashboard');
    });
});