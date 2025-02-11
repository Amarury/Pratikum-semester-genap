<?php
$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}

$id_karyawan = $_GET['id_karyawan'];

$query = "DELETE FROM karyawan WHERE id_karyawan = $id_karyawan";
$gampang->query($query);

header("location:http://localhost:8080/ppb/lth2/karyawan/karyawan.php");
?>