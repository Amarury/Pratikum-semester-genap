<?php
include "../template/konek.php"; 

$pelangganid = $_GET['pelangganid']; //???


// Isset => Berfungsi untuk melakukan validasi apakah data sudah dikirim oleh user atau belum
if (isset($_POST['nama_pelanggan'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];

    // jalankan query
    $query = "UPDATE pelanggan SET nama_pelanggan = '$namapelanggan', alamat = '$alamat', nomor_telepon = '$nomortelepon' WHERE pelanggan_id = $pelangganid";

    // Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
    $eksekusi_query = $konek_db->query($query);
}

$query_tampilkan =$konek_db->query("SELECT * FROM pelanggan where pelanggan_id = $pelangganid");
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
            <h2>Update pelanggan</h2>
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
                <label for="nama_pelanggan" class="col-sm-2 col-form-label">nama pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                        placeholder="Masukan nama pelanggan" value="<?= $hasil['nama_pelanggan']?>">
                </div>
            </div>

            <!-- harga -->
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" value="<?= $hasil['alamat']?>">
                </div>
            </div>

            <!-- Stok -->
            <div class="mb-3 row">
                <label for="nomor_telepon" class="col-sm-2 col-form-label">nomor_telepon</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="Masukan nomor_telepon" value="<?= $hasil['nomor_telepon']?>">
                </div>
            </div>

            <a href="http://localhost:8080/pages/tampil-pelanggan.php">
                <button type="button" class="btn btn-outline-success" style="margin:20px 0px; ">Back</button>
            </a>

            <a href="http://localhost:8080/pages/tampil-buku.php">
                <button class="btn btn-outline-success" type="submit">Submit</button>
                <?php if(isset($eksekusi_query)): ?>
                    <?php header ("location: http://localhost:8080/pages/tampil-pelanggan.php") ?>
                <?php endif?>
            </a>
        </form>
    </div>

    <script src="../asset/bootsrap.js"></script>
</body>

