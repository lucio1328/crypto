<?php

use App\Http\Controllers\AnalyseController;
use App\Http\Controllers\UtilisateurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inscription');
})->name('index');
Route::post('/inscription', [UtilisateurController::class, 'inscription'])->name('inscription');

Route::get('/login', function () {
    return view('connection');
})->name('login');
Route::post('/login', [UtilisateurController::class, 'login']);

Route::get('/chart', function () {
    return view('chart');
})->name('chart');


Route::get('/analyse', [AnalyseController::class, 'showAnalyseForm'])->name('analyse.form');
Route::post('/analyse', [AnalyseController::class, 'generateAnalysis'])->name('analyse.generate');
