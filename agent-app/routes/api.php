<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register',[AuthController::class,'register'])->name('user.register');
Route::post('login',[AuthController::class,'login'])->name('user.login');

Route::group([
    'middleware'=>'auth:sanctum'
], function (){
    Route::get('user-profile', [AuthController::class,'getProfileUser']);
    Route::get('logout', [AuthController::class,'logout']);
});
