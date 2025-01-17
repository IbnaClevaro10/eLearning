@extends('frontend.templates.layout')

@section('content')

<link rel="stylesheet" href="style.css">
<div class="container mt-5">
    <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image" style="background-image: url('assets/img/background/bg_passet.jpg');">
          <div class="hero-inner">
            <h2>Welcome, Naufal!</h2>
            <p class="lead">Selamat belajar, perjuangkan yang terbaik untuk menggapai tujuan!</p>
            <div class="mt-4">
              <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Edit Profile</a>
              <figure class="avatar avatar-custom mr-2 avatar-xl">
                <img src="assets/img/avatar/avatar-1.png" alt="...">
              </figure>
            </div>
          </div>
        </div>
      </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-md-4">
        <div class="card shadow">
          <div class="card-body text-left">
            <h6 class="card-title">Akses Kartu Wisuda : <span class="text-danger">Tidak Aktif</span></h6>
            <p class="card-text">Akses kartu wisuda belum aktif, Kamu belum dapat melihat kartu wisuda</p>
            <button class="btn btn-outline-secondary" disabled>Lihat Kartu Wisuda</button>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-12 col-md-4">
        <div class="card shadow">
          <div class="card-body text-left">
            <h6 class="card-title">Akses Kartu Ujian : <span class="text-success">Aktif</span></h6>
            <p class="card-text">Akses ujian sudah aktif, kamu dapat melihat kartu ujian</p>
            <button class="btn btn-primary">Lihat Kartu Ujian</button>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-12 col-md-4">
        <div class="card shadow">
          <div class="card-body text-left">
            <h6 class="card-title">Akses Kartu Sidang : <span class="text-danger">Tidak Aktif</span></h6>
            <p class="card-text">Akses kartu sidang belum aktif, Kamu belum dapat melihat kartu sidang projek</p>
            <button class="btn btn-outline-secondary" disabled>Lihat Kartu Sidang</button>
          </div>
        </div>
      </div>
    </div>


  <div class="row">
 <div class="col-12 col-md-6">
  <div class="card shadow">
    <div class="card-header">
      <h4>DAFTAR UJIAN</h4>
    </div>
    <div class="card-body">
      Lihat untuk melihat detail ujian
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary">Lihat</button>
    </div>
  </div>
 </div>

 <div class="col-12 col-md-6">
  <div class="card shadow">
    <div class="card-header">
      <h4>DAFTAR TUGAS</h4>
    </div>
    <div class="card-body">
      Klik melihat detail tugas
    </div>
    <div class="card-footer text-right">
      <button class="btn btn-primary">Lihat</button>
    </div>
  </div>
 </div>
</div>
</div>
@stop
