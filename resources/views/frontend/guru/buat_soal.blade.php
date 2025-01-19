@extends('frontend.templates.layout')

@section('content')
<div class="container mt-5">
    <div class="row">
      <!-- Left Section: Buat Soal -->
      <div class="col-md-4">
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Buat Soal</h5>

            <form>
              <!-- Tipe Soal -->
              <div class="form-group">
                <label>Tipe soal</label>
                <select class="form-control">
                  <option>Pilih tipe soal</option>
                  <option>Pilihan ganda</option>
                  <option>Essay</option>
                </select>
              </div>

              <!-- Jumlah Soal -->
              <div class="mb-3">
                <label for="jumlahSoal" class="form-label">Jumlah Soal</label>
                <input type="number" id="jumlahSoal" class="form-control">
              </div>

              <!-- Buat Button -->
              <button type="submit" class="btn btn-primary w-100">Buat</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Right Section: Preview Soal -->
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-body">
            <!-- Settings -->
            <div class="d-flex justify-content-between mb-3">
              <div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="acakSoal">
                  <label class="form-check-label" for="acakSoal">Acak Soal</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="acakJawaban">
                  <label class="form-check-label" for="acakJawaban">Acak Jawaban</label>
                </div>
              </div>
              <button type="button" class="btn btn-success">Simpan Pengaturan</button>
            </div>

            <!-- Preview Soal -->
            <div class="preview-container">
              <img src="https://via.placeholder.com/150" alt="Illustration">
              <h5>Sedang Menunggu Soal ...</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@stop
