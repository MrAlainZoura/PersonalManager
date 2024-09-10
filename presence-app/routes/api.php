<?php

use App\Http\Controllers\api\PresenceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('update-presence',[PresenceController::class, 'update']);