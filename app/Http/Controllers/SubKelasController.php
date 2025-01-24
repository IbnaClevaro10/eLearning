<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub_Kelas;
use App\Models\Kelas;

class SubKelasController extends Controller
{
    // Menampilkan form untuk membuat sub_kelas
    public function create()
    {
        $kelas = Kelas::all(); // Ambil data kelas untuk dropdown
        $sub_kelas = Sub_Kelas::with('kelas')->get();
        return view('frontend.admin.subkelas.create', compact('kelas', 'sub_kelas'));
    }


    // Menyimpan data sub_kelas baru
    public function store(Request $request)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id', // Validasi agar kelas_id harus ada di tabel kelas
            'nama_sub' => 'required|string|max:255',
        ]);

        Sub_Kelas::create([
            'kelas_id' => $request->kelas_id,
            'nama_sub' => $request->nama_sub,
        ]);

        return redirect()->route('sub_kelas.create')->with('success', 'Sub Kelas berhasil ditambahkan!');
    }

    // Menampilkan form edit untuk sub_kelas
    public function edit($id)
    {
        $subKelas = Sub_Kelas::findOrFail($id); // Ambil data sub_kelas berdasarkan id
        $kelas = Kelas::all(); // Ambil data kelas untuk dropdown
        return view('frontend.admin.subkelas.edit', compact('subKelas', 'kelas'));
    }

    // Mengupdate data sub_kelas yang diedit
    public function update(Request $request, $id)
    {
        $request->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'nama_sub' => 'required|string|max:255',
        ]);

        $subKelas = Sub_Kelas::findOrFail($id);
        $subKelas->update([
            'kelas_id' => $request->kelas_id,
            'nama_sub' => $request->nama_sub,
        ]);

        return redirect()->route('sub_kelas.create')->with('success', 'Sub Kelas berhasil diupdate!');
    }

    // Menghapus data sub_kelas
    public function delete($id) {
        // Hapus data berdasarkan id
        Sub_Kelas::find($id)->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}
