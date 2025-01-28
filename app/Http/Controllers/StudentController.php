<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\Student;
use App\Models\Sub_kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    // Form Tambah Akun Siswa
    public function create()
    {
        $kelas = Kelas::all();
        $subKelas = Sub_kelas::all();
        $student = Student::with('kelas', 'subKelas')->get();
        return view('frontend.admin.siswa.create', compact('kelas', 'subKelas', 'student'));
    }

    // Simpan Akun Siswa
    public function store(Request $request)
    {
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'nis' => 'required|unique:students',
            'username' => 'required|unique:students',
            'password' => 'required|min:6',
            'kelas_id' => 'required|exists:kelas,id',
            'sub_kelas_id' => 'required|exists:sub_kelas,id',
        ]);

        Student::create([
            'nama_siswa' => $request->nama_siswa,
            'nis' => $request->nis,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'kelas_id' => $request->kelas_id,
            'sub_kelas_id' => $request->sub_kelas_id,
        ]);

        return redirect()->route('siswa.create')->with('success', 'Akun siswa berhasil dibuat.');
    }
}
