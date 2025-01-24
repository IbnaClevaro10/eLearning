<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        return view('frontend.admin.index'); // Pastikan path view benar
    }

    public function create() {
        $kelas = Kelas::all();
        return view('frontend.admin.kelas.create', compact('kelas'));
    }

    public function store(Request $request)
    {
        $kelas = new Kelas();
        $kelas->nama_kelas = $request->input('nama_kelas');
        $kelas->save();
        return redirect()->route('frontend.admin.kelas.index');
    }

        public function edit($id) {
        // Edit Data Berdasarkan Id
        $kelas = Kelas::find($id);
        return view('frontend.admin.kelas.edit', compact('kelas'));
        // dd($user);
    }

    public function update($id, Request $request) {
            Kelas::find($id)->update($request->all());
            return redirect()->route('kelas.edit')->with('success', 'Data Berhasil diupdate!');
    }

    public function delete($id) {
        // Hapus data berdasarkan id
        Kelas::find($id)->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}

