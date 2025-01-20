@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
    <h2>Input Sub-Kelas</h2>

    {{-- Form Input Kelas --}}
    <form action="{{ route('kelas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Masukkan nama kelas">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

    {{-- Tampilkan Daftar Kelas --}}
    <h3 class="mt-5">Daftar Kelas</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kelas as $class)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $class->nama_kelas }}</td>
                    <td>
                        {{-- Tombol Edit dan Hapus --}}
                        <a href="admin/kelas/{id}/edit" class="btn btn-sm btn-warning">Edit</a>
                        <a href="admin/kelas/{id}/delete" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
