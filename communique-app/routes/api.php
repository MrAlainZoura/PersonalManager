<?php

use App\Http\Controllers\api\MessageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('communique', [MessageController::class,'store']);
Route::post('communique-service', [MessageController::class,'comService']);