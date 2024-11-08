<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\CommuniqueController;
use App\Http\Controllers\MessageController as ControllersMessageController;

// Route::get('/', function () {
//     return view('home.index');
// });

Route::get('sendMail',[MailController::class,'sendMail'])->name('mail.send');
// Route::resource('api/message', MessageController::class);
Route::post('login',[HomeController::class,'login'])->name('login');
Route::post('logout',[HomeController::class,'logout'])->name('logout')->middleware(AuthMiddleware::class);
Route::get('/',[HomeController::class,'index'])->name('home');//->middleware(AuthMiddleware::class);
Route::resource('communiques',CommuniqueController::class)->middleware(AuthMiddleware::class);
Route::resource('messages',ControllersMessageController::class)->middleware(AuthMiddleware::class);