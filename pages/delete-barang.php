<?php
include "../template/config_db.php"; //

$produkid = $_GET['produkid']; //???

// jalankan query
$query = "DELETE FROM produk WHERE produk_id = '$produkid'";

// Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
$eksekusi_query = $konek_db->query($query);

header("location: http://localhost:8080/pages/tampil-buku.php")
?>