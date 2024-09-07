<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('users',[UserController::class, 'index']);
Route::post('users-login',[UserController::class, 'loginwith'])->name('login');
Route::post('users-register',[UserController::class, 'register'])->name('register');
Route::get('users',[UserController::class, 'index']);

Route::group(['middleware'=>'userAdmin'], function(){
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/role/create', [RoleController::class, 'create'])->name('rolecreate');
    
});
Route::post('/dashboard/role/store', [RoleController::class, 'store'])->name('rolestore');