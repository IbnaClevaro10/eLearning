<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SubKelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


// Login
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Tambahkan route lain khusus untuk admin di sini
});

// Proteksi Route Dashboard Guru
Route::middleware(['auth', 'guru'])->group(function () {
    Route::get('/guru', [TeacherController::class, 'index'])->name('guru.index');
    // Tambahkan route lain khusus untuk guru di sini
});

// Proteksi Route Dashboard Siswa
Route::middleware(['auth', 'siswa'])->group(function () {
    Route::get('/siswa', [StudentController::class, 'index'])->name('siswa.index');
    // Tambahkan route lain khusus untuk siswa di sini
});

// Buat Akun Siswa & Guru
// Tambah Akun Guru
Route::get('/admin/guru/create', [AdminController::class, 'createGuru'])->name('admin.createGuru');
Route::post('/admin/guru/store', [AdminController::class, 'storeGuru'])->name('admin.storeGuru');

// Tambah Akun Siswa
Route::get('/admin/siswa/create', [AdminController::class, 'createSiswa'])->name('admin.createSiswa');
Route::post('/admin/siswa/store', [AdminController::class, 'storeSiswa'])->name('admin.storeSiswa');


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/dashboard', function () {
    return view('frontend.templates.layout');
});
//
Route::get('admin', [KelasController::class, 'index'])->name('frontend.admin.kelas.index');
// Kelas
// Buat Kelas
Route::get('admin/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::POST('admin/store', [KelasController::class, 'store'])->name('kelas.store');
// Edit Kelas
Route::get('admin/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::post('admin/kelas/{id}/update', [KelasController::class, 'update'])->name('kelas.update');
// Hapus Kelas
Route::get('admin/kelas/{id}/delete', [KelasController::class, 'delete'])->name('kelas.hapus');

// Sub Kelas
// Buat Sub Kelas
Route::get('admin/sub_kelas/create', [SubKelasController::class, 'create'])->name('sub_kelas.create');
Route::post('admin/sub_kelas/store', [SubKelasController::class, 'store'])->name('sub_kelas.store');
// Edit Sub Kelas
Route::get('admin/sub_kelas/{id}/edit', [SubKelasController::class, 'edit'])->name('sub_kelas.edit');
Route::get('admin/sub_kelas/{id}/update', [SubKelasController::class, 'update'])->name('sub_kelas.update');
// Update Sub Kelas
Route::get('admin/sub_kelas/{id}', [SubKelasController::class, 'update'])->name('sub_kelas.update');
// Hapus
Route::get('admin/sub_kelas/{id}/delete', [SubKelasController::class, 'delete'])->name('sub_kelas.delete');


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
Route::get('/multiple_choice', function () {
    return view('frontend.guru.multiple_choice');
});
Route::get('/essay', function () {
    return view('frontend.guru.essay');
});
Route::get('/ujian', function () {
    return view('frontend.siswa.ujian');
});
Route::get('/tes_ujian', function () {
    return view('frontend.siswa.tes_ujian');
});
