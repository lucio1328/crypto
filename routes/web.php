<?php

use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inscription');
});

Route::post('/inscription', [UtilisateurController::class, 'inscription'])->name('inscription');

