<?php

// use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\api\AgentController;
use App\Http\Controllers\api\DepartementController;
use App\Http\Controllers\api\SectionController;
use App\Http\Controllers\api\ServiceController;
use App\Http\Controllers\AutheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('register',[AuthController::class,'register'])->name('user.register');
// Route::post('login',[AuthController::class,'login'])->name('user.login');

// Route::group([
//     'middleware'=>'auth:sanctum'
// ], function (){
//     Route::get('user-profile', [AuthController::class,'getProfileUser']);
//     Route::get('logout', [AuthController::class,'logout']);
// });

Route::group(['prefix' => 'auth'], function ($router) {
    Route::post('login', [AutheController::class,'login']);
    Route::post('register', [AutheController::class,'register']);
});

Route::middleware(['auth:api'])->group(function (){
    Route::post('logout', [AutheController::class,'logout']);
    Route::post('refresh', [AutheController::class,'refresh']);
    Route::post('me', [AutheController::class,'me']);
    Route::post('profile-update', [AutheController::class,'update']);
    Route::get('all-users', [AutheController::class, 'alls']);
});
Route::post('update-departement',[DepartementController::class, 'update']);
Route::apiResource('departements', DepartementController::class);

Route::post('update-section',[SectionController::class, 'update']);
Route::apiResource('sections', SectionController::class);

Route::post('update-service',[ServiceController::class, 'update']);
Route::apiResource('service', ServiceController::class);
Route::get('agent-show', [AgentController::class,'show']);
Route::get('get-agent-by-service/{id}', [AgentController::class,'getAgentByService']);