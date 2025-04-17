<?php
include "../template/konek.php"; //

$pelanggan_id = $_GET['pelanggan_id']; 

// jalankan query
$query = "DELETE FROM pelanggan WHERE pelanggan_id = '$pelanggan_id'";

// Fungsi $update_hasil adalah untuk melakukan eksekusi query yang ada pada $query.
$eksekusi_query = $konek_db->query($query);

header("location: ../page/tampil-pelanggan.php");
?>