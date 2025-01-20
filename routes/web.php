<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('frontend.auth.login');
});
Route::get('/dashboard', function () {
    return view('frontend.templates.layout');
});
    // Buat Kelas
    Route::get('admin', [KelasController::class, 'index'])->name('frontend.admin.kelas.index');
    Route::get('admin/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
    Route::POST('admin/store', [KelasController::class, 'store'])->name('kelas.store');
    // Edit Kelas
    Route::get('admin/kelas/{id}/edit', [KelasController::class,'edit'])->name('kelas.edit');
    // Hapus Kelas
    Route::get('admin/kelas/{id}/delete', [KelasController::class,'delete'])->name('kelas.hapus');




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

