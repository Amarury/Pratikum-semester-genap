<?php
$konek = new mysqli('localhost','root','','preview');

if($konek->connect_error){
    die("Koneksi Gagal : " .$konek->connect_error);
}

$query = "select * from pelanggan";

$hasil = $konek->query($query);

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
    <div class="container">
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php while($ws = $hasil->fetch_assoc()):
            $no = 1; ?>
            <tr>
                <td><?=$no?></td>
                <td><?php echo $ws['nama_pelanggan'];?></td>
                <td><?php echo $ws['alamat'];?></td>
                <td><?php echo $ws['nomor_telepon'];?></td>
            </tr>
            <?php $no++; endwhile;?>
        </tbody>
    </table>
    </div>
</body>
</html>