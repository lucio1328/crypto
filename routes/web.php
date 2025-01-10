<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortefeuilleController;

Route::get('/', function () {
    return view('layout');
});
Route::get('formPortefeuille', function () {
    return view('insertionProtefeuille');
});
Route::get('/portefeuille/form', [PortefeuilleController::class, 'form']);
Route::get('/portefeuille/list', [PortefeuilleController::class, 'list']);
Route::post('/portefeuille/create', [PortefeuilleController::class, 'create']);
