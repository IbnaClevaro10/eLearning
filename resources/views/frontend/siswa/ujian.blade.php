@extends('frontend.templates.layout')

@section('content')
<div class="container py-4 bg-white">
    <!-- Header -->
    <div class="d-flex align-items-center mb-4">
        <img src="https://via.placeholder.com/50" class="rounded-circle me-3" alt="Profile">
        <div>
            <h5 class="mb-0">MUHAMMAD NAUFAL NURFIKRI</h5>
            <p class="mb-0 text-muted">12 RPL 2 &nbsp; | &nbsp; T.A : 2022/2023</p>
        </div>
    </div>

    <!-- Navigation Tabs -->
    <ul class="nav nav-tabs mb-4">
        <li class="nav-item">
            <a class="nav-link" href="#">Tugas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Ujian</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Hasil</a>
        </li>
    </ul>

    <!-- Exams Section -->
    <h6 class="mb-3">Bahasa Sunda</h6>
    <div class="row">
        <!-- Exam Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 border shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">STS GANJIL 01_BHS_SUNDA IX</h6>
                    <span class="status-done">Done!</span>
                </div>
                <p class="text-muted small mb-2">Bahasa Sunda</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted small">20 Soal</span>
                    <span class="text-muted small">174 Selesai</span>
                    <span class="text-muted small">12 Januari, 2025</span>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-sm w-40">Buka Soal</a>
                </div>
            </div>
        </div>

        <!-- Exam Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 border shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">SAS 01_BHS_SUNDA IX</h6>
                    <span class="status-done">Done!</span>
                </div>
                <p class="text-muted small mb-2">Bahasa Sunda</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted small">30 Soal</span>
                    <span class="text-muted small">174 Selesai</span>
                    <span class="text-muted small">29 Februari, 2025</span>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-sm w-40">Buka Soal</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Exam Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 border shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">STS GANJIL 01_BHS_SUNDA IX</h6>
                    <span class="status-done">Done!</span>
                </div>
                <p class="text-muted small mb-2">Bahasa Sunda</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted small">20 Soal</span>
                    <span class="text-muted small">174 Selesai</span>
                    <span class="text-muted small">12 Januari, 2025</span>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-sm w-40">Buka Soal</a>
                </div>
            </div>
        </div>

        <!-- Exam Card -->
        <div class="col-md-4 mb-4">
            <div class="card p-3 border shadow-sm">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0">SAS 01_BHS_SUNDA IX</h6>
                    <span class="status-done">Done!</span>
                </div>
                <p class="text-muted small mb-2">Bahasa Sunda</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="text-muted small">30 Soal</span>
                    <span class="text-muted small">174 Selesai</span>
                    <span class="text-muted small">29 Februari, 2025</span>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-primary btn-sm w-40">Buka Soal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
