<?php
// 1.membuat koneksi ke database
$konek_db = new mysqli("localhost", "root", "", "byul");
// 2.periksa koneksi ke database
if ($konek_db->connect_error) {
    die("Koneksi gagal: " . $konek_db->connect_error);
}
// 3.membuat query untuk menambah data
if (isset($_POST['nama_jabatan'])) {
    // plain text query
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $hasil = $konek_db->query(query: "INSERT INTO jabatan(nama_jabatan,gaji_pokok) VALUES('$nama_jabatan',$gaji_pokok)");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link rel="stylesheet" href="../assets/bt.css">
</head>

<body>
    <!-- form jabatan -->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php if (isset($hasil)): ?>

    <?php endif; ?>

    <div class="ctrl">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" id="nama_jabatan" placeholder="name@example.com"
                    name="nama_jabatan">
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji pokok</label>
                <input type="number" class="form-control" id="gaji_pokok" placeholder="" name="gaji_pokok">
            </div>
            <button class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- akhir form -->

    <script src="../assets/bt.js"></script>
</body>

</html>