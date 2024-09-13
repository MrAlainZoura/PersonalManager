<?php

use App\Http\Controllers\api\MessageController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('sendMail',[MailController::class,'sendMail'])->name('mail.send');
// Route::resource('api/message', MessageController::class);