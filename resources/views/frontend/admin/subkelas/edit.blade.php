@extends('frontend.templates.layout')
@section('content')
<div class="container mt-5">
    <h2>Edit Sub Kelas</h2>

    {{-- Form Edit Sub Kelas --}}
    <form action="{{ route('sub_kelas.update', $subKelas->id) }}" method="POST">
        @csrf
        @method('GET')
        <div class="form-group">
            <label for="kelas_id">Pilih Kelas</label>
            <select name="kelas_id" id="kelas_id" class="form-control">
                @foreach($kelas as $data)
                    <option value="{{ $data->id }}" {{ $subKelas->kelas_id == $data->id ? 'selected' : '' }}>
                        {{ $data->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="nama_sub">Nama Sub</label>
            <input type="text" class="form-control" id="nama_sub" name="nama_sub" value="{{ $subKelas->nama_sub }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Update</button>
    </form>
</div>
@endsection
