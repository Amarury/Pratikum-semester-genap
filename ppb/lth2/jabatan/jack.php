<?php
$kafka = new mysqli("localhost","root","","byul");

if($kafka->connect_error){
    die("Koneksi gagal :" .$kafka->connect_error);
}

if(isset($_POST['nama_jabatan'])){
    $nama_jabatan = $_POST['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $hasil = $kafka->query(query: "INSERT INTO jabatan(nama_jabatan,gaji_pokok) VALUES('$nama_jabatan',$gaji_pokok)");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bt.css">
</head>
<body>
    
</body>
</html>