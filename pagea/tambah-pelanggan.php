<?php
include "../template/konek.php";

if ($konek_db->connect_error) {
    die("Koneksi Gagal: " . $konek_db->connect_error);
}

// Isset => Berfungsi untuk melakukan validasi apakah data sudah dikirim oleh user atau belum
if (isset($_POST['nama_pelanggan'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    // jalankan query
    $query = "INSERT INTO pelanggan (nama_pelanggan, alamat, nomor_telepon) VALUES ('$nama_pelanggan', '$alamat', '$nomor_telepon');";
    $tambah = $konek_db->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add pelanggan Form</title>
    <link rel="stylesheet" href="../assets/bt.css">
</head>

<body>

    <!-- Form Add produk -->
    <div class="container">
        <br>
        <?php if (isset($tambah)): ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Data Berhasil Dikirim</h4>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <br>
            <h2>Form Add pelanggan</h2>
            <br>

            <!-- ID produk
            <div class="mb-3 row">
                <label for="id_buku" class="col-sm-2 col-form-label">ID Buku</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="id_buku" name="id_buku"
                        placeholder="Masukan ID produk">
                </div>
            </div> -->

            <!-- nama produk  -->
            <div class="mb-3 row">
                <label for="nama_produk" class="col-sm-2 col-form-label">nama pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                        placeholder="Masukan nama pelanggan">
                </div>
            </div>

            <!-- harga -->
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat">
                </div>
            </div>

            <!-- Stok -->
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">nomor_telepon</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="alamat" name="alamat" placeholder="nomor_telepon">
                </div>
            </div>

            <a href="http://localhost:8080/pages/tampil-pelanggan.php">
                <button type="button" class="btn btn-outline-success" style="margin:20px 0px; ">Back</button>
            </a>

            <button class="btn btn-outline-success" type="submit">Submit</button>
        </form>
    </div>

    <script src="../asset/bt.js"></script>
</body>
