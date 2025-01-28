<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mapel = Mapel::all();
        return view('frontend.admin.mapel.create', compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mapel = new Mapel();
        $mapel->nama_mapel = $request->input('nama_mapel');
        $mapel->save();
        return redirect()->route('mapel.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        // Edit Data Berdasarkan Id
        $mapel = Mapel::find($id);
        return view('frontend.admin.mapel.edit', compact('mapel'));
    }

    public function update( Request $request, $id) {
            Mapel::find($id)->update($request->all());
            return redirect()->route('mapel.create')->with('success', 'Data Berhasil diupdate!');
    }

    public function delete($id) {
        // Hapus data berdasarkan id
        Mapel::find($id)->delete();
        return back()->with('success', 'Data Berhasil Dihapus!');
    }
}
