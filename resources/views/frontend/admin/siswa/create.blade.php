@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
<h1>Tambah Akun Siswa</h1>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div>
        <label>Nama Siswa</label>
        <input type="text" id="nama_siswa" class="form-control" name="nama_siswa" required>
    </div>
    <div>
        <label>NIS</label>
        <input type="text" id="nis" class="form-control" name="nis" required>
    </div>
    <div class="form-group">
        <label for="kelas_id">Pilih Kelas</label>
        <select name="kelas_id" id="kelas_id" class="form-control">
            <option value="" disabled selected>Pilih Kelas</option>
            @foreach ($kelas as $class)
                <option value="{{ $class->id }}">{{ $class->nama_kelas }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="kelas_id">Pilih Sub Kelas</label>
        <select name="sub_kelas_id" id="sub_kelas_id" class="form-control">
            <option value="" disabled selected>Pilih Sub Kelas</option>
            @foreach ($subKelas as $sub_kelas)
                <option value="{{ $sub_kelas->id }}">{{ $sub_kelas->nama_sub }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Username</label>
        <input type="text" id="username" class="form-control" name="username" required>
    </div>
    <div>
        <label>Password</label>
        <input type="password" id="password" class="form-control" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Tambah Siswa</button>
</form>
<h3 class="mt-5">Daftar Siswa</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Siswa</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Sub Kelas</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $students)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $students->nama_siswa }}</td>
                <td>{{ $students->nis }}</td>
                <td>{{ $students->kelas->nama_kelas }}</td>
                <td>{{ $students->subKelas->nama_sub }}</td>
                <td>{{ $students->username }}</td>
                <td>
                    {{-- Tombol Edit dan Hapus --}}
                    <a href="{{ route('guru.edit', $students->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ route('guru.delete', $students->id) }}"
                        class="btn btn-sm btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
