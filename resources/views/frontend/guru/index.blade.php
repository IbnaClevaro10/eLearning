@extends('frontend.templates.layout')

@section('content')

<link rel="stylesheet" href="style.css">
<div class="container">
    <div class="row align-items-center">
        <div class="col">
            <span>Ruang Mengajar</span>
        </div>
        <div class="col-auto">
            <a href="buat_tugas"><button class="btn btn-primary">+ Create</button></a>
        </div>
    </div><br><br>

<div class="col-12 mb-4">
    <div class="hero text-white hero-bg-image" style="background-image: url('assets/img/background/passet.jpg');">
      <div class="hero-inner">
        <h2>Yulianti Anggraini S.Pd</h2>
        <div class="text-muted">
            NIP:12354
        </div>
        <p class="lead">Bahasa Sunda</p>
        <div class="mt-4">
          <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Edit Profile</a>
          <figure class="avatar avatar-custom mr-2 avatar-xl">
            <img src="assets/img/avatar/avatar-1.png" alt="...">
          </figure>
        </div>
      </div>
    </div>
  </div>
  <div class="row g-3">
    <div class="col-12 col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h4>DAFTAR TUGAS MASUK</h4>
          </div>
          <div class="card-body">
            Lihat untuk melihat detail tugas yang telah diselesaikan
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Lihat</button>
          </div>
        </div>
       </div>

       <div class="col-12 col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <h4>DAFTAR UJIAN</h4>
          </div>
          <div class="card-body">
            Lihat melihat detail daftar ujian yang telah menyelesaikan
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Lihat</button>
          </div>
        </div>
       </div>
        <!-- Card -->
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <span class="badge-status badge-active">Active</span>
                    <div class="d-flex align-items-center">
                        <div class="rounded bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                            X
                        </div>
                        <div class="ms-3">
                            <h5 class="card-title mb-0">u</h5>
                            <p class="text-muted mb-1">Informatika</p>
                        </div>
                    </div>
                    <div>
                        <span class="badge bg-secondary me-1">RPL 1</span>
                        <span class="badge bg-secondary">RPL 2</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📝 Ujian</span>
                        <span>📄 0 Soal</span>
                        <span>👤 0 Respon</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📅 08 Nov, 2024</span>
                        <div class="d-flex align-items-center">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1" checked>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Lihat →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <span class="badge-status badge-active">Active</span>
                    <div class="d-flex align-items-center">
                        <div class="rounded bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                            X
                        </div>
                        <div class="ms-3">
                            <h5 class="card-title mb-0">u</h5>
                            <p class="text-muted mb-1">Informatika</p>
                        </div>
                    </div>
                    <div>
                        <span class="badge bg-secondary me-1">RPL 1</span>
                        <span class="badge bg-secondary">RPL 2</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📝 Ujian</span>
                        <span>📄 0 Soal</span>
                        <span>👤 0 Respon</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📅 08 Nov, 2024</span>
                        <div class="d-flex align-items-center">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1" checked>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Lihat →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light">
                    <span class="badge-status badge-nonactive">Nonactive</span>
                    <div class="d-flex align-items-center">
                        <div class="rounded bg-secondary text-white d-flex justify-content-center align-items-center" style="width: 40px; height: 40px;">
                            X
                        </div>
                        <div class="ms-3">
                            <h5 class="card-title mb-0">u</h5>
                            <p class="text-muted mb-1">Informatika</p>
                        </div>
                    </div>
                    <div>
                        <span class="badge bg-secondary me-1">7A</span>
                        <span class="badge bg-secondary">7B</span>
                        <span class="badge bg-secondary">7C</span>
                        <span class="badge bg-secondary">7D</span>
                        <span class="badge bg-secondary">7E</span>
                        <span class="badge bg-secondary">7F</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📝 Ujian</span>
                        <span>📄 0 Soal</span>
                        <span>👤 0 Respon</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <span>📅 08 Nov, 2024</span>
                        <div class="d-flex align-items-center">
                            <div class="form-check form-switch me-3">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault1" checked>
                            </div>
                            <a href="#" class="btn btn-primary btn-sm">Lihat →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
