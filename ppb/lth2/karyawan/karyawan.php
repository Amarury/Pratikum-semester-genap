<?php

$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}

$query = "select * from karyawan";

$hasil = $gampang->query($query);

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
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Id jabatan</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
        <?php while($jual = $hasil->fetch_assoc()):
                $no = 1;
                ?>
            <tr>
            <td><?=$no?></td>
                <td><?php echo $jual['nama'];?></td>
                <td><?php echo $jual['tanggal_lahir'];?></td>
                <td><?php echo $jual['jenis_kelamin'];?></td>
                <td><?php echo $jual['id_jabatan'];?></td>
            </tr>
            <?php $no++; endwhile;?>
        </tbody>
    </table>
</body>
</html>