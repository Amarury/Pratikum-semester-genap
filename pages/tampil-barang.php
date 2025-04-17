<?php
include "../template/config_db.php";

// ambil data buku
$query = "SELECT * FROM produk";
$hasil = $konek_db->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<body>

    <div class="container">
    <a href="http://localhost:8080/pages/tambah-barang.php">
       <button>tambah</button>
    </a>
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>produk ID</th>
                    <th>Nama Produk</th>
                    <th>harga</th>
                    <th>stok</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = $hasil->fetch_assoc()): ?>
                    <tr>
                        <td> <?= $item['produk_id'] ?> </td>
                        <td> <?= $item['nama_produk'] ?> </td>
                        <td> <?= $item['harga'] ?> </td>
                        <td> <?= $item['stok'] ?> </td>
                        <td>
                            <a href="http://localhost:8080/pages/buku-update.php?produk_id=<?=$item['produk_id']?>">update</a>
                            <a href="http://localhost:8080/pages/delete-barang.php?produk_id=<?=$item['produk_id']?>">hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>

</html>