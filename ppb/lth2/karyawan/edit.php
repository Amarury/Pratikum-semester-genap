<?php

$konek_db = new mysqli("localhost", "root", "", "byul");

if ($konek_db->connect_error) {
    die("Koneksi gagal: " . $konek_db->connect_error);
}
if (isset($_POST['nama'])) {
    
    $nama = $_POST['nama'];
    $tangaal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $id_jabatan = $_POST['id_jabatan'];
    $hasil = $konek_db->query(query: "INSERT INTO Karyawan(nama,tanggal_lahir,jenis_kelamin) VALUES('$nama_',$tanggal_lahir,$jenis_kelamin,$id_jabatan)");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bt.css">
</head>
<body>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php if (isset($hasil)): ?>

    <?php endif; ?>

    <div class="ctrl">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="name@example.com"
                    name="nama">
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="datetime" class="form-control" id="tanggal_lahir" placeholder="" name="tanggal_lahir">
            </div>
            <div class="sey">
               <label for="jenis_kelamin" class="form-label">Pria</label>
               <input type="radio" class="from-control" id="jenis_kelamin" placeholder="" name="jenis_kelamin">
               <label for="jenis_kelamin" class="form-label">Perempuan</label>
               <input type="radio" class="from-control" id="jenis_kelamin" placeholder="" name="jenis_kelamin">
            </div>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="../assets/bt.js"></script>
</body>
</html>