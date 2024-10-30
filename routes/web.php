<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/login', function () {
    return view('pages.auth.login');
});

Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::resource('user', UserController::class);

// url autentikasi dipindahkan di app/providers/FortifyServiceProvider