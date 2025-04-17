<?php
include "../template/config_db.php"; //

$pelanggan_id = $_GET['pelanggan_id']; 

// jalankan query
$query = "DELETE FROM pelanggan WHERE pelanggan_id = '$pelanggan_id'";

// Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
$eksekusi_query = $konek_db->query($query);

header("location: http://localhost:8080/pages/tampil-pelanggan.php")
?>