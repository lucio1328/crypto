<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortefeuilleController;
use App\Http\Controllers\UtilisateurController;

Route::get('/', function () {
    return view('inscription');
});
Route::get('formPortefeuille', function () {
    return view('insertionProtefeuille');
});
Route::post('/inscription', [UtilisateurController::class, 'inscription'])->name('inscription');
Route::get('/portefeuille/form', [PortefeuilleController::class, 'form']);
Route::get('/portefeuille/list', [PortefeuilleController::class, 'list']);
Route::post('/portefeuille/create', [PortefeuilleController::class, 'create']);
