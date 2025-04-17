<?php
include "../template/config_db.php"; //

$produk_id = $_GET['produk_id']; //???

// Isset => Berfungsi untuk melakukan validasi apakah data sudah dikirim oleh user atau belum
if (isset($_POST['nama_produk'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // jalankan query
    $query = "UPDATE produk SET nama_produk = '$nama_produk', harga = $harga, stok = $stok WHERE produk_id = $produk_id";

    // Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
    $eksekusi_query = $konek_db->query($query);
}

$query_tampilkan =$konek_db->query("SELECT * FROM produk where produk_id = $produk_id") ;
$hasil = $query_tampilkan->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Books Form</title>
    <link rel="stylesheet" href="../assets-bs/style.css">
</head>

<body>

    <!-- Form Add produk -->
    <div class="container">
        <br>
        <?php if (isset($tambah)): ?>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">update Data Berhasil Dikirim</h4>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <br>
            <h2>Update produk</h2>
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
                <label for="nama_produk" class="col-sm-2 col-form-label">nama produk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                        placeholder="Masukan Kode Buku" value="<?= $hasil['nama_produk']?>">
                </div>
            </div>

            <!-- harga -->
            <div class="mb-3 row">
                <label for="harga" class="col-sm-2 col-form-label">harga</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukan harga" value="<?= $hasil['harga']?>">
                </div>
            </div>

            <!-- Stok -->
            <div class="mb-3 row">
                <label for="stok" class="col-sm-2 col-form-label">Stok produk</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukan Stok produk" value="<?= $hasil['stok']?>">
                </div>
            </div>

            <a href="http://localhost:8080/pages/tampil-buku.php">
                <button type="button" class="btn btn-outline-success" style="margin:20px 0px; ">Back</button>
            </a>

            <a href="http://localhost:8080/pages/tampil-buku.php">
                <button class="btn btn-outline-success" type="submit">Submit</button>
                <?php if(isset($eksekusi_query)): ?>
                    <?php header ("location: http://localhost:8080/pages/tampil-buku.php") ?>
                <?php endif?>
            </a>
        </form>
    </div>

    <script src="../asset/bootsrap.js"></script>
</body>

