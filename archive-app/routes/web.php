<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DossierAgentController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\DossierSectionController;
use App\Http\Controllers\DossierServiceController;
use App\Http\Controllers\DossierDepartementController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('create-sous-dossier',[DossierController::class,'storeSousDossier'] )->name('sousD.create');
Route::get('save-doc-departement/{id}',[DossierDepartementController::class,'saveDoc'] )->name('saveDocDep');
Route::resource('document', DocumentController::class);
Route::resource('departement-dossier', DossierDepartementController::class);
Route::resource('section-dossier', DossierSectionController::class);
Route::resource('service-dossier', DossierServiceController::class);
Route::resource('agent-dossier', DossierAgentController::class);