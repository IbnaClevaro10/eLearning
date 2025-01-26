@extends('layouts.admin')

@section('content')
<h1>Tambah Akun Siswa</h1>
<form action="{{ route('admin.storeSiswa') }}" method="POST">
    @csrf
    <div>
        <label>Nama Siswa</label>
        <input type="text" name="nama_siswa" required>
    </div>
    <div>
        <label>NIS</label>
        <input type="text" name="nis" required>
    </div>
    <div>
        <label>Username</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label>Password</label>
        <input type="password" name="password" required>
    </div>
    <button type="submit">Tambah Siswa</button>
</form>
@endsection
