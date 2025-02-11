<?php

$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}

$id_jabatan = $_GET['id_jabatan'];

// print_r($data);
if(isset($_POST['nama_jabatan'])){
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];

    $query ="UPDATE jabatan SET nama_jabatan='$nama_jabatan', gaji_pokok='$gaji_pokok' WHERE id_jabatan= $id_jabatan";
    $hasil = $gampang->query($query);
}

$jabatan = $gampang->query("select * from jabatan where id_jabatan=$id_jabatan");
$data = $jabatan->fetch_assoc();
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
        <action="" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                <input type="text" class="form-control" id="nama_jabatan" placeholder="name@example.com"
                    name="nama_jabatan" value="<?=$data['nama_jabatan']?>">
            </div>
            <div class="mb-3">
                <label for="gaji_pokok" class="form-label">Gaji pokok</label>
                <input type="number" class="form-control" id="gaji_pokok" placeholder="" name="gaji_pokok" value="<?=$data['gaji_pokok']?>">
            </div>
            <button class="btn btn-primary">Simpan</button>
                <a href="http://localhost:8080/ppb/lth2/jabatan/jok.php" class="btn btn-success">Kembali</a>
                
        </form>
    </div>
    <!-- akhir form -->

    <script src="../assets/bt.js"></script>
</body>

</html>
