<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.auth.login');
});
Route::get('/dashboard', function () {
    return view('frontend.auth.dashboard');
});

    Route::get('/siswa', function () {
        return view('frontend.siswa.index');
    });
    Route::get('/guru', function () {
        return view('frontend.guru.index');
    });
    Route::get('/buat_tugas', function () {
        return view('frontend.guru.buat_tugas');
    });
    Route::get('/buat_soal', function () {
        return view('frontend.guru.buat_soal');
});

