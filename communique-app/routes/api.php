<?php

use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\api\CommuniqueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('message/show/{id}', [MessageController::class,'show']);
Route::get('message', [MessageController::class,'index']);
Route::post('message', [MessageController::class,'store']);
Route::post('message-service', [MessageController::class,'comService']);

Route::apiResource('communique',CommuniqueController::class);