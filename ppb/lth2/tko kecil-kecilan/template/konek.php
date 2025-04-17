<?php

$konek_db = new mysqli('localhost','root','','teke');

if($konek_db->connect_error){
    die("Koneksi gagal : " .$konek_db->connect_error);
}

?>