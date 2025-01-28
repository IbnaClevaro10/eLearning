@extends('frontend.templates.layout')

@section('content')
<link rel="stylesheet" href="style.css">
<div class="container mt-5">
    <h2>Input Mata Pelajaran</h2>

    {{-- Form Input Kelas --}}
    <form action="{{ route('mapel.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kelas">Nama Mata Pelajaran</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" placeholder="Masukkan nama kelas">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

    {{-- Tampilkan Daftar Kelas --}}
    <h3 class="mt-5">Daftar Mapel</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Pelajaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mapel as $pelajaran)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelajaran->nama_mapel }}</td>
                    <td>
                        {{-- Tombol Edit dan Hapus --}}
                        <a href="{{route ('mapel.edit', $pelajaran->id)}}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route ('mapel.hapus', $pelajaran->id)}}" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
