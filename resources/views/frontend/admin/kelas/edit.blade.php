@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Kelas</h2>
    <form action=" {{ route ('kelas.edit')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_kelas">Nama Kelas</label>
            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" value="{{$kelas->nama_kelas}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@stop
