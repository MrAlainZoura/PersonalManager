<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\api\PresenceController;
use App\Http\Controllers\PresenceController as PresenceCtr;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::post('/login',[HomeController::class,'login'])->name('home.login');
Route::post('/logout',[HomeController::class,'logout'])->name('home.logout');

Route::get('/presences-global',[PresenceCtr::class,'globalPresence'])->name('presence.global');

Route::get('presence', [PresenceController::class, 'store']);
Route::get('presence/show', function(){
    return response()->json(['success'=>true]);
});
Route::post('presences-sortie',[PresenceCtr::class,'updateSortier'])->name('presence.sortie');
Route::get('presences-signature/{action}',[PresenceCtr::class,'create'])->name('presence.create');
Route::get('presences/{an}/{mois}', [PresenceCtr::class, 'showPresence'])->name('show.presence');
Route::get('presence/{date}', [PresenceCtr::class, 'showPresenceJour'])->name('show.jour');
Route::resource('presences',PresenceCtr::class);
Route::resource('rapports',RapportController::class);
