<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mapel;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function create()
    {
        $mapel = Mapel::all();
        $teacher = Teacher::with('mapel')->get();
        return view('frontend.admin.guru.create', compact('mapel', 'teacher'));
    }

    // Simpan Akun Guru
    public function store(Request $request)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
            'nuptk' => 'required|unique:teachers',
            'username' => 'required|unique:teachers',
            'password' => 'required|min:6',
            'mapel_id' => 'required|exists:mapels,id',
        ]);

        Teacher::create([
            'nama_guru' => $request->nama_guru,
            'nuptk' => $request->nuptk,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'mapel_id' => $request->mapel_id,
        ]);

        return redirect()->route('guru.create')->with('success', 'Akun guru berhasil dibuat.');
    }

    public function edit($id)
    {
        $guru = Teacher::findOrFail($id); // Ambil data sub_kelas berdasarkan id
        $mapel = Mapel::all(); // Ambil data kelas untuk dropdown
        return view('frontend.admin.guru.edit', compact('guru', 'mapel'));
    }

    // Mengupdate data sub_kelas yang diedit
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_guru' => 'required|string|max:255',
            'nuptk' => 'required|unique:teachers',
            'username' => 'required|unique:teachers',
            'password' => 'required|min:6',
            'mapel_id' => 'required|string|exists:mapels,id',
        ]);

        $guru = Teacher::findOrFail($id);
        $guru->update([
            'mapel_id' => $request->mapel_id,
            'nama_guru' => $request->nama_guru,
            'nuptk' => $request->nuptk,
            'username' => $request->username,
        ]);

        return redirect()->route('guru.create')->with('success', 'Guru berhasil diupdate!');
    }

    // Menghapus data sub_kelas
    public function delete($id) {
        // Hapus data berdasarkan id
        Teacher::find($id)->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}
