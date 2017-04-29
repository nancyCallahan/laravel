<?php

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (!Auth::check()) {
        return redirect('login');
    }

    return view('landings/home');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', function () {
        return view('landings/login');
    })->name('login');

    Route::get('register', function () {
        return view('landings/register');
    })->name('register');
});