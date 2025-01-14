@extends('frontend.templates.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Profile Section */
        .profile-img {
            border-radius: 50%;
            border: 3px solid #007bff;
        }
        .profile-header {
            border-bottom: 2px solid #f0f0f0;
            background-color: cadetblue;
            height: 300px;
            width: 1263px;
            margin-left: -42px;
        }
        .edit-profile {
            font-size: 0.9rem;
        }

        /* Card Section */
        .card {
            border: none;
            box-shadow: 5px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card h6 {
            font-size: 1rem;
            font-weight: bold;
        }
        .card .btn {
            font-size: 0.9rem;
        }

        /* Table Section */
        table {
            border-collapse: collapse;
        }
        table th, table td {
            text-align: center;
            vertical-align: middle;
        }
        .table-container {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        /* Pagination */
        .pagination .page-link {
            color: #1461b4;
        }
        .pagination .page-link:hover {
            background-color: #007bff;
            color: white;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .table-container {
                padding: 10px;
            }
            .profile-img {
                width: 70px;
                height: 70px;
            }
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <!-- Profile Section -->
        <div class="row align-items-center profile-header pb-3">
            <div class="col-auto">
                <img alt="Profile picture" src="https://storage.googleapis.com/a1aa/image/72WtUeetMMl2N08M2pVzGrn9UDOaeoAaX3ASZiFxofq5ua6PB.jpg" class="profile-img" height="80" width="80">
            </div>
            <div class="col">
                <h4 class="mb-0">MUHAMMAD NAUFAL NURFIKRI</h4>
                <p class="mb-1 text-muted">Student</p>
                <p class="mb-0">
                    <i class="fas fa-map-marker-alt"></i> 12 RPL 2
                    <span class="mx-2">&bull;</span>
                    Belum Lulus
                </p>
            </div>
            <div class="col-auto">
                <a href="#" class="btn btn-primary edit-profile">Edit Profile</a>
            </div>
        </div>

        <!-- Cards Section -->
        <div class="row mt-4 g-3">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>Akses Kartu Wisuda: <span class="text-danger">Tidak Aktif</span></h6>
                    <p class="text-muted">Akses kartu wisuda belum aktif, Kamu belum dapat melihat kartu wisuda</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Lihat Kartu Wisuda</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>Akses Kartu Ujian: <span class="text-success">Aktif</span></h6>
                    <p class="text-muted">Akses ujian sudah aktif, kamu dapat melihat kartu ujian</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Lihat Kartu Ujian</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>Akses Kartu Sidang: <span class="text-danger">Tidak Aktif</span></h6>
                    <p class="text-muted">Akses kartu sidang belum aktif, Kamu belum dapat melihat kartu sidang projek</p>
                    <a href="#" class="btn btn-outline-secondary btn-sm">Lihat Kartu Ujian</a>
                </div>
            </div>
        </div>

        <!-- Summary Section -->
        <div class="row mt-4 g-3">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>TOTAL SAKIT BULAN INI</h6>
                    <div class="fs-3 text-primary">5</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>TOTAL IZIN BULAN INI</h6>
                    <div class="fs-3 text-success">1</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h6>TOTAL ALPA BULAN INI</h6>
                    <div class="fs-3 text-danger">0</div>
                </div>
            </div>
        </div>

        <!-- Table Section -->
        <div class="table-container mt-4">
            <h6 class="mb-3">Riwayat Poin</h6>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <label for="entries" class="form-label mb-0">Entries per page:</label>
                    <select id="entries" class="form-select form-select-sm w-auto d-inline-block">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div>
                    <label for="search" class="form-label mb-0">Search:</label>
                    <input type="text" id="search" class="form-control form-control-sm w-auto d-inline-block">
                </div>
            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Tipe</th>
                        <th>Point</th>
                        <th>Tanggal & Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center">No data available in table</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-flex justify-content-end">
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">&lsaquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">&rsaquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@stop
