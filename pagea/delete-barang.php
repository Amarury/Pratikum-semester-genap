<?php
include "../template/konek.php" //

$produk_id = $_GET['produk_id']; //???

// jalankan query
$query = "DELETE FROM produk WHERE produk_id = '$produk_id'";

// Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
$eksekusi_query = $konek_db->query($query);

header("location: ../page/tampil-pelanggan.php");
?>