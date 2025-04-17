<?php

$konek = new mysqli('localhost','root','','teke');

if($konek->connect_error){
    die("Koneksi Gagal : " . $konek->connect_error);
}

$query = "select * from produk";

$hasil = $konek->query($query);

?>

<!DOCTYPE html>
<lang="en">
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
                <th>Produk id</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php while($sb = $hasil->fetch_assoc()):
               
                ?>
            <tr>
                <td><?php echo $sb['produkid']?></td>
                <td><?php echo $sb['namaproduk'];?></td>
                <td><?php echo $sb['harga'];?></td>
                <td><?php echo $sb['stok'];?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="../page/updt_brng.php">Edit</a>
                    <a class="btn btn-danger btn-sm" href="../page/delete.php">Hapus</a>
                    <a class="btn btn-light btn-sm" href="../page/tambahp.php">Tambah</a>
                </td>
            </tr>
            <?php  endwhile; ?>
        </tbody>
    </table>
    </div>
</body>
</html>