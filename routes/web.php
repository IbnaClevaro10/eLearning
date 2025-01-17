<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.auth.login');
});
Route::get('/siswa', function () {
    return view('frontend.siswa.index');
});
Route::get('/guru', function () {
    return view('frontend.guru.index');
});
