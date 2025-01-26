@extends('frontend.templates.layout')

@section('content')
<h1>Tambah Akun Guru</h1>
<form action="{{ route('admin.storeGuru') }}" method="POST">
    @csrf
    <div>
        <label for="nama">Nama Guru</label>
        <input type="text" class="form-control" name="nama_guru" required>
    </div>
    <div>
        <label>NUPTK</label>
        <input type="text" class="form-control" name="nuptk" required>
    </div>
    <div>
        <label>Username</label>
        <input type="text" class="form-control" name="username" required>
    </div>
    <div>
        <label>Password</label>
        <input type="password" class="form-control" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Tambah Guru</button>
</form>
@endsection
