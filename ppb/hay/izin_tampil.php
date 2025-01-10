<?php

$sebelum = new mysqli('localhost','root','','byul');

if($sebelum->connect_error){
    die("Koneksi gagal: " . $sebelum->connect_error);
}

$query = "select * from Karyawan";

$hasil = $sebelum->query($query);

while($dayoung = $hasil->fetch_assoc()){
    echo $dayoung['nama']."<br>";
}
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
                <th>Id Karyawan</th>
                <th>Nama lengkap</th>
                <th>Tanggal lahir</th>
                <th>Jenis kelamin</th>
                <th>Id jabatan</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            while($dayoung = $hasil->fetch_assoc()){
                echo "<tr>
                    <td>".$item['id_karyawam']."</td>
                    <td>".$item['nama']."</td>
                    <td>".$item['tanggal_lahir']."</td>
                    <td>".$item['jenis_kelamin']."</td>
                    <td>".$item['id_jabatan']</td>
                
                   </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>