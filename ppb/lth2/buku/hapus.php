<?php
$gampang = new mysqli('localhost','root','','byul');

if($gampang->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}

$id_buku = $_GET['id_buku'];

$query = "DELETE FROM books WHERE id_buku = $id_buku";
$gampang->query($query);

header("location:http://localhost:8080/ppb/lth2/buku/tpln.php");
?>