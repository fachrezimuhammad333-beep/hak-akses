<?php

use App\Http\Controllers\MesinController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('mesin.index'));

// Rute login diarahkan ke halaman register sesuai kebutuhan Anda
Route::get('/login', function () {
    return view('auth.register');
})->name('login');

// Rute register yang sebenarnya
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Implementasi hak akses middleware auth pada modul mesin
Route::middleware(['auth'])->group(function () {
    Route::resource('mesin', MesinController::class)->except(['show']);
});