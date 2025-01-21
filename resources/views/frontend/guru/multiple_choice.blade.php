@extends('frontend.templates.layout')

@section('content')
<div class="container mt-4">
  <div class="row">
      <!-- Form Multiple Choice -->
      <div class="col-lg-4 col-md-12 mb-3">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Multiple Choice</h5>
                  <form>
                      <div class="mb-3">
                          <label for="gambar" class="form-label">Gambar (Opsional)</label>
                          <input type="file" class="form-control" id="gambar">
                      </div>
                      <div class="mb-3">
                          <label for="deskripsi-soal" class="form-label">Deskripsi Soal</label>
                          <textarea class="form-control" id="deskripsi-soal" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                          <label for="pilihan-jawaban" class="form-label">Pilih Jawaban Yang Benar</label>
                          <div class="input-group mb-2">
                              <span class="input-group-text">A</span>
                              <input type="text" class="form-control" placeholder="Jawaban A">
                          </div>
                          <div class="input-group mb-2">
                              <span class="input-group-text">B</span>
                              <input type="text" class="form-control" placeholder="Jawaban B">
                          </div>
                          <div class="input-group mb-2">
                              <span class="input-group-text">C</span>
                              <input type="text" class="form-control" placeholder="Jawaban C">
                          </div>
                          <div class="input-group mb-2">
                              <span class="input-group-text">D</span>
                              <input type="text" class="form-control" placeholder="Jawaban D">
                          </div>
                          <div class="input-group mb-2">
                              <span class="input-group-text">E</span>
                              <input type="text" class="form-control" placeholder="Jawaban E">
                          </div>
                      </div>
                      <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar (Opsional)</label>
                        <input type="file" class="form-control" id="gambar">
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi-soal" class="form-label">Deskripsi Soal</label>
                        <textarea class="form-control" id="deskripsi-soal" rows="3"></textarea>
                    </div>
                      <button type="reset" class="btn btn-danger">Reset</button>
                  </form>
              </div>
          </div>
      </div>

      <!-- Preview Soal -->
      <div class="col-lg-8 col-md-12 mb-3">
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Preview Soal</h5>
                  <div class="preview-soal">
                      <img src="https://via.placeholder.com/150" alt="Astronaut">
                      <p>Sedang Menunggu Soal...</p>
                  </div>
                  <div class="mt-3">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="acak" id="acakSoal">
                          <label class="form-check-label" for="acakSoal">Acak Soal</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="acak" id="acakJawaban">
                            <label class="form-check-label" for="acakJawaban">Acak Jawaban</label>
                        </div>
                        <button type="button" class="btn btn-light mt-3">Simpan Pengaturan</button>
                    </div>
                </div>
            </div>
      </div>
  </div>
</div>


@stop
