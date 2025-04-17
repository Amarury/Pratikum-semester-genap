<?php

$mumet = new mysqli('localhost','root','','app');

if($mumet->connect_error){
    die("Koneksi gagal : " . $gampang->connect_error);
}
$query = "select * from boks";

$hasil = $mumet->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..assets/bt.css">
</head>
<body>
    <table></table>
</body>
</html>