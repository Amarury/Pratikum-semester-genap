<?php

include "../template/konek.php";

if (isset($_POST['namaproduk'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    // jalankan query
    $query = "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$namaproduk', '$harga', '$stok');";
    $tambah = $konek_db->query($query);
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
    <div class="container">a
        <?php if (isset($hasil)): ?>

        <?php endif; ?>

        <div class="sp">
            <form action="" method="post">
                <div class="jr">
                    <label for="namaproduk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" id="namaproduk" placeholder="" name="namaproduk">
                </div>
                <div class="jk">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="" name="harga">
                </div>
                <div class="gh">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" placeholder="" name="stok">
                </div>
                <button class="btn btn-primary">Simpan</button>
                <a href="../permulaan/main.php">Kembali</a>
            </form>
            <script src="../assets/bt.js"></script>
        </div>
    </div>
</body>

</html>