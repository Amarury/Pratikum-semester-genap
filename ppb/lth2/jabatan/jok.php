<?php

$gampang = new mysqli('localhost','root','','byul');

if($sebelum->connect_error){
    die("Koneksi gagal: " . $sebelum->connect_error);
}

$query = "select * from jabatan";

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
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
            </tr>
        </thead>
        <tbody>
            <?php while($jual = $hasil->fetch_assoc()):?>
            <tr>
                <td><?php echo $jual['namak_jabatan'];?></td>
                <td><?php echo $jual['gaji_pokok'];?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>