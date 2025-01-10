<?php

$gampang = new mysqli('localhost','root','','byul');

if($sebelum->connect_error){
    die("Koneksi gagal: " . $sebelum->connect_error);
}

$query = "select * from absensi";

$hasil = $gampang->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id absensi</th>
                <th>id Karyawan</th>
                <th>Tanggal</th>
                <th>jam masuk</th>
                <th>jam keluar</th>
            </tr>
        </thead>
        <tbody>
            <?php while($jual = $hasil->fetch_assoc());?>
            <tr>
                <td><?php echo $jual['id_absemsi'];?></td>
                <td><?php echo $jual['id_karyawan'];?></td>
                <td><?php echo $jual['tanggal'];?></td>
                <td><?php echo $jual['jam_masuk'];?></td>
                <td><?php echo $jual['jam_keluar'];?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>