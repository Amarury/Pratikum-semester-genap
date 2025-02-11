<?php
$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}

$id_jabatan = $_GET['id_jabatan'];

$query = "DELETE FROM jabatan WHERE id_jabatan = $id_jabatan";
$gampang->query($query);

header("location:http://localhost:8080/ppb/lth2/jabatan/jok.php");
?>