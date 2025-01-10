<?php

$sebelum = new mysqli('localhost','root','','byul');

if($sebelum->connect_error){
    die("Koneksi gagal: " . $sebelum->connect_error);
}