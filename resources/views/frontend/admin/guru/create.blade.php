@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
    <h1>Tambah Akun Guru</h1>
<form action="{{ route('guru.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama Guru</label>
        <input type="text" class="form-control" name="nama_guru" required>
    </div>
    <div class="form-group">
        <label>NUPTK</label>
        <input type="text" class="form-control" name="nuptk" required>
    </div>
    <div class="form-group">
        <label for="kelas_id">Pilih Mapel</label>
        <select name="mapel_id" id="mapel_id" class="form-control">
            <option value="" disabled selected>Pilih Mapel</option>
            @foreach ($mapel as $mapels)
                <option value="{{ $mapels->id }}">{{ $mapels->nama_mapel }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Tambah Guru</button>
</form>

    <h3 class="mt-5">Daftar Guru</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>NUPTK</th>
                <th>Mapel</th>
                <th>Username</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacher as $teachers)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teachers->nama_guru }}</td>
                    <td>{{ $teachers->nuptk }}</td>
                    <td>{{ $teachers->mapel->nama_mapel }}</td>
                    <td>{{ $teachers->username }}</td>
                    <td>
                        {{-- Tombol Edit dan Hapus --}}
                        <a href="{{ route('guru.edit', $teachers->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('guru.delete', $teachers->id) }}"
                            class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
