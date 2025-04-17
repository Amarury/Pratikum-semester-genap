<?php
include "../template/konek.php";

// ambil data buku
$query = "SELECT * FROM pelanggan";
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
    <a href="http://localhost:8080/page/tambah-pelanggan.php">
       <button>tambah</button>
    </a>
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>Pelanggan ID</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($item = $hasil->fetch_assoc()): ?>
                    <tr>
                        <td> <?= $item['pelanggan_id'] ?> </td>
                        <td> <?= $item['nama_pelanggan'] ?> </td>
                        <td> <?= $item['alamat'] ?> </td>
                        <td> <?= $item['nomor_telepon'] ?> </td>
                        <td>
                            <a href="http://localhost:8080/pages/pelanggan-update.php?pelanggan_id=<?=$item['pelanggan_id']?>">update</a>
                            <a href="http://localhost:8080/pages/pelanggan-delete.php?pelanggan_id=<?=$item['pelanggan_id']?>">hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

</body>

</html>