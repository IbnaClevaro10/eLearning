    @extends('frontend.templates.layout')

    @section('content')

    <link rel="stylesheet" href="style.css">
    <div class="container mt-5">
        <div class="col-12 mb-4">
            <div class="hero text-white hero-bg-image" style="background-image: url('assets/img/background/bg_passet.jpg');">
            <div class="hero-inner">
                <h2>Welcome, Admin!</h2>
                <p class="lead">Selamat bekerja, perjuangkan yang terbaik untuk menggapai tujuan!</p>
                <div class="mt-4">
                <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Edit Profile</a>
                <figure class="avatar avatar-custom mr-2 avatar-xl">
                    <img src="/assets/img/avatar/avatar-1.png" alt="...">
                </figure>
                </div>
            </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-3">
                <div class="card shadow">
                <div class="card-body text-left">
                    <h6 class="card-title">Input Kelas</h6>
                    <a href="/admin/kelas/create" class="btn btn-primary">+ Buat Kelas</a>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card shadow">
                <div class="card-body text-left">
                    <h6 class="card-title">Input Sub Kelas</h6>
                    <a href="admin/sub_kelas/create" class="btn btn-outline-primary">+ Buat Sub Kelas</a>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card shadow">
                <div class="card-body text-left">
                    <h6 class="card-title">Input Guru</h6>
                    <a href="admin/guru/create" class="btn btn-outline-primary">+ Buat Akun Guru</a>
                </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card shadow">
                <div class="card-body text-left">
                    <h6 class="card-title">Input Siswa</h6>
                    <a href="admin/siswa/create" class="btn btn-primary">+ Buat Akun Siswa</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    @stop
