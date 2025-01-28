@extends('frontend.templates.layout')
@section('content')
<div class="container mt-5">
    <h2>Edit Guru</h2>

    {{-- Form Edit Sub Kelas --}}
    <form action="{{ route('guru.update', $guru->id) }}" method="POST">
        @csrf
        @method('GET')
        <div class="form-group mt-3">
            <label for="nama_sub">Nama guru</label>
            <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $guru->nama_guru }}">
        </div>
        <div class="form-group">
            <label for="mapel_id">Pilih mapel</label>
            <select name="mapel_id" id="mapel_id" class="form-control">
                @foreach($mapel as $mapels)
                    <option value="{{ $mapels->id }}" {{ $mapels->mapel_id == $mapels->id ? 'selected' : '' }}>
                        {{ $mapels->nama_mapel }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="nama_sub">NUPTK</label>
            <input type="text" class="form-control" id="nuptk" name="nuptk" value="{{ $guru->nuptk}}">
        </div>
        <div class="form-group mt-3">
            <label for="nama_sub">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $guru->username}}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
