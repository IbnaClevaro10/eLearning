<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.auth.login');
});
Route::get('/dashboard', function () {
    return view('frontend.auth.dashboard');
});
