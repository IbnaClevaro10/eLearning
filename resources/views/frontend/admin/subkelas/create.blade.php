@extends('frontend.templates.layout')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Sub Kelas</h2>

        {{-- Form Input Sub Kelas --}}
        <form action="{{ route('sub_kelas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kelas_id">Pilih Kelas</label>
                <select name="kelas_id" id="kelas_id" class="form-control">
                    <option value="" disabled selected>Pilih Kelas</option>
                    @foreach ($kelas as $data)
                        <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-3">
                <label for="nama_sub">Nama Sub</label>
                <input type="text" class="form-control" id="nama_sub" name="nama_sub" placeholder="Masukkan nama sub">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
        {{-- Tabel Hasil Input --}}
        <h3 class="mt-5">Daftar Sub Kelas</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kelas</th>
                    <th>Nama Sub Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub_kelas as $subKelas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $subKelas->kelas->nama_kelas }}</td>
                        <td>{{ $subKelas->nama_sub }}</td>
                        <td>
                            {{-- Tombol Edit dan Hapus --}}
                            <a href="{{ route('sub_kelas.edit', $subKelas->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{ route('sub_kelas.delete', $subKelas->id) }}"
                                class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
