@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
    <h2>Edit Mapel</h2>
    <form action=" {{ route ('kelas.update', $mapel->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_mapel">Nama Mapel</label>
            <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" value="{{$kelas->nama_kelas}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>
</div>
@stop
