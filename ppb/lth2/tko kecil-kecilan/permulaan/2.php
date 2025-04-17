Langsung ke konten utama
Google Kelas
Classroom
2024 - WEB - XI
Beranda
Kalender
Terdaftar
Daftar tugas
2
2024 - WEB - XI
2
2024 - BASDAT - XI
2
2024 - PBTGM - XI
Kelas yang diarsipkan
Setelan
Forum
Tugas kelas
Orang
2024 - WEB - XI
Mendatang
Hore, tidak ada tugas yang perlu segera diselesaikan!

Umumkan sesuatu kepada kelas Anda

Pengumuman: "Silahkan kopi file di bawah ini"
Joko Kristianto
Dibuat pada 07.2107.21 (Diedit 07.24)
Silahkan kopi file di bawah ini

index.html
HTML

login.html
HTML

login.css
CSS

main.css
CSS

Tambahkan komentar kelas...

Penugasan: "TASK - BOOK STORE APP"
Joko Kristianto memposting tugas baru: TASK - BOOK STORE APP
Dibuat pada 07.0607.06
Penugasan: "UPRAK GENAP"
Joko Kristianto memposting tugas baru: UPRAK GENAP
Dibuat pada 21 Feb21 Feb

Pos oleh Rex Lapis
Rex Lapis
Dibuat pada 20 Feb20 Feb
ubur ubur ikan lele mari kita belajar biar ga remed le

Tambahkan komentar kelas...


Pos oleh Rex Lapis
Rex Lapis
Dibuat pada 14 Feb14 Feb
genteng genteng apa yang ganteng efulgntg yahahhaha 😹

Tambahkan komentar kelas...

Materi: "Aplikasi Kasir Toko Buku"
Joko Kristianto memposting materi baru: Aplikasi Kasir Toko Buku
Dibuat pada 31 Jan31 Jan

Pos oleh Han Soyooung
Han Soyooung
Dibuat pada 29 Nov 202429 Nov 2024
fullgntng lucu hohoho
1 komentar kelas

Rex Lapis10 Jan
by1 epep di faktori

Tambahkan komentar kelas...

Penugasan: "UPRAK - PAS - 2"
Joko Kristianto memposting tugas baru: UPRAK - PAS - 2
Dibuat pada 29 Nov 202429 Nov 2024
Penugasan: "UPRAK PAS - 1"
Joko Kristianto memposting tugas baru: UPRAK PAS - 1
Dibuat pada 22 Nov 202422 Nov 2024

Pos oleh ImamGanteng
ImamGanteng
Dibuat pada 22 Nov 202422 Nov 2024
ayo by one bened ji

Tambahkan komentar kelas...

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bheka</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class=" bg-body-tertiary">
    <div id="main" class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="d-flex flex-column  bg-primary shadow vh-100">
            <div class="logo">
                <img src="assets/img/kasir-logo.jpg" alt="" srcset="">
            </div>
            <div class="menu p-2 d-flex flex-column gap-2">
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50 active">
                    <span class="">Dashboard</span>
                    <i class="bi-speedometer2 "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Pelanggan</span>
                    <i class="bi bi-person-gear "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Barang</span>
                    <i class="bi-bag "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Transaksi</span>
                    <i class="bi-cart "></i>
                </a>
                <a href="#"
                    class="btn btn-light w-100 d-flex justify-content-between align-items-center px-4 text-black-50">
                    <span class="">Laporan</span>
                    <i class="bi-table "></i>
                </a>
            </div>
            <div class="logout p-2 mt-auto">
                <a href="" class="btn btn-danger w-100 d-flex px-3 justify-content-between align-content-center">
                    <span>Logout</span>
                    <i class="bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
        <!-- Akhir Sidebar -->
        <!-- Konten Utama -->
        <div id="konten-utama">
            <div class="container-fluid">
                <div class="header d-flex w-100 py-3">
                    <h5 class="h4 fw-bold text-black-50 text-uppercase">Dashboard</h5>
                </div><!-- Akhir header -->

                <!-- Flexibel Konten -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card bg-primary bg-gradient text-white shadow border-0">
                            <div class="card-body d-flex align-items-center ">
                               <i class="bi bi-person-video  px-4" style="font-size: 56px;"></i>
                               <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Pelanggan</span>
                                <span class=" text-white fw-bold" style="font-size: 28px;">100</span>
                               </div>     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  mb-3">

                        <div class="card bg-warning bg-gradient text-white shadow border-0">
                            <div class="card-body d-flex align-items-center ">
                               <i class="bi bi-box  px-4" style="font-size: 56px;"></i>
                               <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Total barang</span>
                                <span class=" text-white fw-bold" style="font-size: 28px;">10</span>
                               </div>     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card bg-info bg-gradient text-white shadow border-0">
                            <div class="card-body d-flex align-items-center ">
                               <i class="bi bi-cart-dash  px-4" style="font-size: 56px;"></i>
                               <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Total transaksi</span>
                                <span class=" text-white fw-bold" style="font-size: 28px;">90</span>
                               </div>     
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3">
                        <div class="card bg-dark bg-gradient text-white shadow border-0">
                            <div class="card-body d-flex align-items-center ">
                               <i class="bi bi-currency-dollar  px-4" style="font-size: 56px;"></i>
                               <div class="d-flex flex-column">
                                <span class="fw-bold text-white">Pendapatan</span>
                                <span class=" text-white fw-bold" style="font-size: 28px;">1000000</span>
                               </div>     
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-4 col-12">
                        <div class="card card-body bg-white shadow border-0">
                            <h5 class="h6 text-black-50">10 Best  Seller</h5>
                            <table class="table table-sm table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Barang</th>
                                        <th>Terjual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>B-002</td>
                                        <td>Ram 16 Gb DDR4</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>B-002</td>
                                        <td>Ram 16 Gb DDR4</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>B-002</td>
                                        <td>Ram 16 Gb DDR4</td>
                                        <td>100</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-8 col-12 mt-lg-0 mt-4">
                        <div class="card card-body bg-white shadow border-0">
                            <h5 class="h6 text-black-50">Pencapaian penjualan 2024</h5>
                            <table class="table table-sm table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Jml Transaksi</th>
                                        <th>Jml Produk</th>
                                        <th>Total Pendapatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>January</td>
                                        <td>90</td>
                                        <td>1800</td>
                                        <td>2000000</td>
                                    </tr>
                                    <tr>
                                        <td>January</td>
                                        <td>90</td>
                                        <td>1800</td>
                                        <td>2000000</td>
                                    </tr>
                                    <tr>
                                        <td>January</td>
                                        <td>90</td>
                                        <td>1800</td>
                                        <td>2000000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- Summary -->
                <!-- Akhir Flexibel Konten -->
            </div>
        </div>
        <!-- Akhir Konten Utama -->
    </div>
</body>

</html>
index.html
Menampilkan index.html.