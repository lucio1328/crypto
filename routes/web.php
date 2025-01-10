<?php

use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\TransactionController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inscription');
});

Route::post('/inscription', [UtilisateurController::class, 'inscription'])->name('inscription');


// Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
// Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');


Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
// routes/web.php
Route::get('/transactions/filtre', [TransactionController::class, 'showFilter'])->name('transactions.filter');
