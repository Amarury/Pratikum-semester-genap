<?php

$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
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
    <link rel="stylesheet" href="../assets/bt.css">
</head>
<body>
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jabatan</th>
                <th>Gaji Pokok</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php while($jual = $hasil->fetch_assoc()):
                $no = 1;
                ?>
            <tr>
                <td><?=$no?></td>
                <td><?php echo $jual['nama_jabatan'];?></td>
                <td><?php echo $jual['gaji_pokok'];?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="http://localhost:8080/ppb/lth2/jabatan/up.php?id_jabatan=<?=$jual['id_jabatan']?>">Edit</a>
                    <a class="btn btn-danger btn-sm" href="http://localhost:8080/ppb/lth2/jabatan/hps.php?id_jabatan=<?=$jual['id_jabatan']?>">Hapus</a>
                </td>
            </tr>
            <?php $no++;  endwhile; ?>
        </tbody>
    </table>
</body>
</html>