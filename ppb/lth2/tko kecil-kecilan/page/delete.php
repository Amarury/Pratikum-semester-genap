<?php

include "../template/konek.php";

$produkid = $_GET['produkid'];

$query = "DELETE FROM produk WHERE pelanggan_id = '$produkid'";

$hasil = $konek->query($query);

header("../permulaan/main.php")
?>