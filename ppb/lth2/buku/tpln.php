<?php 
include "../capcut/config_ff.php";

$query = "select * from books";

$hasil = $buku->query($query);
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
    <?php include "../capcut/template.php"; ?>
    <div class="container">
    <table class="table table-sm table-striped table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php while($sb = $hasil->fetch_assoc()):
                $no = 1;
                ?>
            <tr>
                <td><?=$no?></td>
                <td><?php echo $sb['kode_buku'];?></td>
                <td><?php echo $sb['judul'];?></td>
                <td><?php echo $sb['pengarang'];?></td>
                <td><?php echo $sb['penerbit'];?></td>
                <td><?php echo $sb['harga']?></td>
                <td><?php echo $sb['stok'];?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="http://localhost:8080/ppb/lth2/buku/edit.php?id_buku=">Edit</a>
                    <a class="btn btn-danger btn-sm" href="http://localhost:8080/ppb/lth2/buku/hapus.php?id_buku=">Hapus</a>
                    <a class="btn btn-light btn-sm" href="http://localhost:8080/ppb/lth2/buku/tambah.php?id_buku">Tambah</a>
                </td>
            </tr>
            <?php $no++;  endwhile; ?>
        </tbody>
    </table>
    </div>
</body>
</html>