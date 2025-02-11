<?php
$buku = new mysqli("localhost","root","","toko_app");

if($buku->connect_error){
    die("Koneksi gagal : " . $buku->connect_error);
}
?>