<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Dashboard Admin
    public function index()
    {
        return view('frontend.admin.index');
    }

    // Form Tambah Akun Guru
    public function createGuru()
    {
        return view('frontend.admin.guru.create');
    }

    // Simpan Akun Guru
    public function storeGuru(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
            'nuptk' => 'required|unique:guru',
            'username' => 'required|unique:guru',
            'password' => 'required|min:6',
        ]);

        Teacher::create([
            'nama_guru' => $request->nama_guru,
            'nuptk' => $request->nuptk,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('frontend.admin.index')->with('success', 'Akun guru berhasil dibuat.');
    }

    // Form Tambah Akun Siswa
    public function createSiswa()
    {
        return view('frontend.admin.siswa.create');
    }

    // Simpan Akun Siswa
    public function storeSiswa(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nis' => 'required|unique:siswa',
            'username' => 'required|unique:siswa',
            'password' => 'required|min:6',
        ]);

        Student::create([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('frontend.admin.index')->with('success', 'Akun siswa berhasil dibuat.');
    }
}
