<?php

use App\Http\Controllers\MesinController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', fn () => redirect()->route('mesin.index'));

Route::get('/login', function () {
    return view('auth.register');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

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

Route::middleware(['auth'])->group(function () {
    Route::resource('mesin', MesinController::class)->except(['show']);
});