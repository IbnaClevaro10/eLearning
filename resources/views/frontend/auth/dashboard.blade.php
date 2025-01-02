<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Learning Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/5.0/lineicons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i class="lni lni-dashboard-square-1"></i>
            </button>
            <div class="sidebar-logo">
                    <a href="#">SMP NEGERI 2 CILEUNGSI</a>
                </div>
        </div>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-home-2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-book-1"></i>
                        <span>Smart Learning</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
  <div class="main-content">
   <div class="header">
    <div class="search-bar">
     <i class="fas fa-search">
     </i>
     <input placeholder="Search..." type="text"/>
    </div>
    <div class="profile">
     <img alt="Profilepicture" height="40" src="https://storage.googleapis.com/a1aa/image/8VTVqcEIAMKXKJj8J5Kcd4ct3xefk3q8uykXJNTuOWAn2menA.jpg" width="40"/>
     <div>
      <div class="name">
       MUHAMMAD NAUFAL NURFIKRI
      </div>
      <div class="role">
       student
      </div>
     </div>
    </div>
   </div>
   <div class="date">
    26 December 2024 9:11:27 AM
   </div>
           <div class="dashboard">
            <div class="profile">
             <img alt="Profile picture" height="80" src="https://storage.googleapis.com/a1aa/image/72WtUeetMMl2N08M2pVzGrn9UDOaeoAaX3ASZiFxofq5ua6PB.jpg" width="80"/>
             <div class="info">
              <h2>
               MUHAMMAD NAUFAL NURFIKRI
              </h2>
              <p>
               Student
              </p>
              <div class="details">
               <i class="fas fa-map-marker-alt">
               </i>
               12 RPL 2
               <i class="fas fa-circle">
               </i>
               Belum Lulus
              </div>
             </div>
             <a class="edit-profile" href="#">
              Edit Profile
             </a>
            </div>
            <div class="cards">
             <div class="card">
              <h3>
               Akses Kartu wisuda :
               <span class="status inactive">
                Tidak Aktif
               </span>
              </h3>
              <p>
               Akses kartu wisuda belum aktif, Kamu belum dapat melihat kartu wisuda
              </p>
              <a class="action1" href="#">
               Lihat Kartu wisuda
              </a>
             </div>
             <div class="card">
              <h3>
               Akses Kartu Ujian :
               <span class="status active">
                Aktif
               </span>
              </h3>
              <p>
               Akses ujian sudah aktif, kamu dapat melihat kartu ujian
              </p>
              <a class="action2" href="#">
               Lihat Kartu Ujian
              </a>
             </div>
             <div class="card">
              <h3>
               Akses Kartu Sidang :
               <span class="status inactive">
                Tidak Aktif
               </span>
              </h3>
              <p>
               Akses kartu sidang belum aktif, Kamu belum dapat melihat kartu sidang projek
              </p>
              <a class="action3" href="#">
               Lihat Kartu Ujian
              </a>
             </div>
            </div>
            <div class="container">
                <div class="card1">
                    <div>
                        <h3>TOTAL SAKIT BULAN INI</h3>
                        <div class="value">5</div>
                    </div>
                    <div class="icon">
                        <i class="fas fa-thermometer-half"></i>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <h3>TOTAL IZIN BULAN INI</h3>
                        <div class="value">1</div>
                    </div>
                    <div class="icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                </div>
                <div class="card1">
                    <div>
                        <h3>TOTAL ALPA BULAN INI</h3>
                        <div class="value">0</div>
                    </div>
                    <div class="icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                </div>
                <div class="table-container">
                    <h3>Riwayat Poin</h3>
                    <div class="entries">
                        <label for="entries">entries per page</label>
                        <select id="entries">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div class="search">
                        <label for="search">Search:</label>
                        <input type="text" id="search">
                    </div>
                    <table>
                        <thead>
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
                                <td colspan="5" style="text-align: center;">No data available in table</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination">
                        <button>&laquo;</button>
                        <button>&lsaquo;</button>
                        <button>&rsaquo;</button>
                        <button>&raquo;</button>
                    </div>
                </div>
            </d
           </div>
           </div>
          </body>
         </html>

    <!-- Bootstrap JS -->
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


