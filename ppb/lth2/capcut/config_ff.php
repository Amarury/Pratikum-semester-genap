<?php
$buku = new mysqli('localhost','root','','app');

if($buku->connect_error){
    die("Koneksi gagal : " . $buku->connect_error);
}

?>