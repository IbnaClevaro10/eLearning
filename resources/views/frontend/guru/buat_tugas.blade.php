@extends('frontend.templates.layout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">
        <i class="bi bi-arrow-left-square-fill"></i><h5 class="card-title mb-4">BUAT MATERI</h5>

        <form>
          <!-- Mata Pelajaran -->
          <div class="mb-3">
            <label for="mataPelajaran" class="form-label">Mata Pelajaran</label>
            <select id="mataPelajaran" class="form-select">
              <option selected>Pilih Mata Pelajaran</option>
              <option value="1">Bahasa Sunda</option>
            </select>
          </div>

          <!-- Kelas -->
          <div class="mb-3">
            <label class="form-label">Kelas</label>
            <div>
              <button type="button" class="btn btn-outline-primary me-2">IX A</button>
              <button type="button" class="btn btn-outline-primary me-2">IX B</button>
              <button type="button" class="btn btn-outline-primary">IX C</button>
              <button type="button" class="btn btn-outline-primary">IX D</button>
              <button type="button" class="btn btn-outline-primary">IX E</button>
              <button type="button" class="btn btn-outline-primary">IX F</button>
              <button type="button" class="btn btn-outline-primary">IX G</button>
              <button type="button" class="btn btn-outline-primary">IX H</button>
            </div>
          </div>

          <!-- Tipe Materi -->
          <div class="mb-3">
            <label class="form-label">Tipe Materi</label>
            <div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipeMateri" id="tugasLatihan" value="tugas">
                <label class="form-check-label" for="tugasLatihan">Tugas / Latihan</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tipeMateri" id="ujian" value="ujian">
                <label class="form-check-label" for="ujian">Ujian (PTS/PAS/US)</label>
              </div>
            </div>
          </div>

          <!-- Judul -->
          <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" id="judul" class="form-control">
          </div>

          <!-- Isi/Konten -->
          <div class="mb-3">
            <label for="editor" class="form-label">Isi / Konten</label>
            <div class="border p-2 rounded" id="editor-container">
              <div class="d-flex mb-2">
                <button type="button" class="btn btn-light btn-sm me-2"><strong>B</strong></button>
                <button type="button" class="btn btn-light btn-sm me-2"><em>I</em></button>
                <button type="button" class="btn btn-light btn-sm me-2"><u>U</u></button>
                <button type="button" class="btn btn-light btn-sm me-2"><i class="bi bi-link-45deg"></i></button>
                <button type="button" class="btn btn-light btn-sm me-2"><i class="bi bi-list-ul"></i></button>
                <button type="button" class="btn btn-light btn-sm me-2"><i class="bi bi-list-ol"></button></i>
                <button type="button" class="btn btn-light btn-sm me-2"><i class="bi bi-card-image"></i></button>
                <button type="button" class="btn btn-light btn-sm"><i class="bi bi-quote"></i></button>
                <button type="button" class="btn btn-light btn-sm"><i class="bi bi-table"></i></button>
                <button type="button" class="btn btn-light btn-sm"><i class="bi bi-camera-video"></i></button>
                <button type="button" class="btn btn-light btn-sm"><i class="bi bi-arrow-90deg-left"></i></button>
                <button type="button" class="btn btn-light btn-sm"><i class="bi bi-arrow-90deg-right"></i></button>
              </div>
              <textarea id="editor" class="form-control" rows="8"></textarea>
            </div>
          </div>
        </form>

          <!-- Simpan Button -->
          <div class="d-flex justify-content-between">
            <div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="tetapDiHalaman">
                <label class="form-check-label" for="tetapDiHalaman">
                  Tetap di halaman ini
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
