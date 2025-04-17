<?php
$konek_db = new mysqli('localhost','root','','teke');

if($konek_db->connect_error){
    die("Koneksi Gagal : " .$konek_db->connect_error);
}

$produkid = $_GET['produkId'];

// Isset => Berfungsi untuk melakukan validasi apakah data sudah dikirim oleh user atau belum
if (isset($_POST['namaproduk'])) {
    $nama_produk = $_POST['namaproduk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // jalankan query
    $query = "UPDATE produk SET nama_produk = '$namaproduk', harga = $harga, stok = $stok WHERE produk_id= $produkId";

    // Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
    $eksekusi_query = $konek_db->query($query);
}

$query_tampilkan =$konek_db->query("SELECT * FROM produk WHERE produk_id =$produkId");
$hasil = $query_tampilkan->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Books Form</title>
    <link rel="stylesheet" href="../assets/bt.css">
</head>

<body>

    <!-- Form Add produk -->
    <div class="container">
        <br>
        <?php if (isset($eksekusi_queryh)): ?>
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
                <label for="namaproduk" class="col-sm-2 col-form-label">nama produk</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namaproduk" name="namaproduk"
                        placeholder="Masukan Kode Buku" value="<?= $hasil['namaproduk']?>">
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

    <script src="../asset/bt.js"></script>
</body>

