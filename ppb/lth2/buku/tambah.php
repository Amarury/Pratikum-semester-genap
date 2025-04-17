<?php 
$buku = new mysqli("localhost","root","","jj");

if($buku->connect_error){
    die("Koneksi gagal : " . $buku->connect_error);
}
if(isset($_POST['kode_buku'])){
    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    
    $hasil = $buku->query("INSERT INTO books(kode_buku,judul,pengarang,penerbit,harga,stok) VALUES('$kode_buku','$judul','$pengarang','$penerbit',$harga,$stok)");
}
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
    <div class="container">a
        <?php if(isset($hasil)): ?>

        <?php endif; ?>
        
        <div class="sp">
            <form action="" method="post">
                <div class="jr">
                    <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="text" class="form-control" id="kode_buku" placeholder="" name="kode_buku">
                </div>
                <div class="mb7">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="" name="judul">
                </div>
                <div class="up">
                    <label for="pengarang" class="form-label">pengarang</label>
                    <input type="text" class="form-control" id="pengarang" placeholder="" name="pengarang">
                </div>
                <div class="ui">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" placeholder="" name="penerbit">
                </div>
                <div class="jk">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="" name="harga">
                </div>
                <div class="gh">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" placeholder="" name="stok">
                </div>
                <button class="btn btn-primary">Simpan</button>
                    <a href="http://localhost:8080/ppb/lth2/buku/tpln.php">Kembali</a>
            </form>
            <script src="../assets/bt.js"></script>
        </div>
    </div>
</body>
</html>