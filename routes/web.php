<?php

use App\Http\Controllers\MesinController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Http\Request;

Route::get('/', fn () => redirect()->route('mesin.index'));

=======

Route::get('/', fn () => redirect()->route('mesin.index'));

// Rute login diarahkan ke halaman register sesuai kebutuhan Anda
>>>>>>> b2eed6e89aa5ab12736d8a36999a24c1423983a5
Route::get('/login', function () {
    return view('auth.register');
})->name('login');

<<<<<<< HEAD
=======
// Rute register yang sebenarnya
>>>>>>> b2eed6e89aa5ab12736d8a36999a24c1423983a5
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

<<<<<<< HEAD
Route::post('/register', function (Request $request) {
    $user = \App\Models\User::firstOrCreate(
        ['email' => $request->email],
        [
            'name' => $request->name,
            'password' => bcrypt($request->password)
        ]
    );

    auth()->login($user);

    return redirect()->route('mesin.index');
});

=======
// Implementasi hak akses middleware auth pada modul mesin
>>>>>>> b2eed6e89aa5ab12736d8a36999a24c1423983a5
Route::middleware(['auth'])->group(function () {
    Route::resource('mesin', MesinController::class)->except(['show']);
});