<?php
$buku = new mysqli('localhost','root','','app');

if($buku->connect_error){
    die("Koneksi gagal : " . $buku->connect_error);
}

$query = "select * from books";
$hasil = $buku -> query($query);

$listbuku = [];
while ($data = $hasil->fetch_assoc()){
    $listbuku[] = $data;
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
    <?php include "../capcut/template.php"; ?>
    <div class="container mt-2">
        <table class="table table-sm table-bordered">
            <thead>
                <tr>
                    <th>kode buku</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Harga</th>
                    <th>Jml</th>
                    <th>Sub total</th>
                    <th></th>
                </tr>
                <tr>
                    <td><input type="text" name="" id="kode_buku" class="form-control form-control-sm" list="list_kode_buku">
                        <datalist id="list_kode_buku">
                            
                        </datalist>
                    </td>
                    <td><input type="text" name="" id="judul" class="form-control form-control-sm" disabled></td>
                    <td><input type="text" name="" id="penerbit" class="form-control form-control-sm" disabled></td>
                    <td><input type="text" name="" id="harga" class="form-control form-control-sm" disabled></td>
                    <td><input type="text" name="" id="jumlah" class="form-control form-control-sm"></td>
                    <td><input type="text" name="" id="subtotal" class="form-control form-control-sm" disabled></td>
                    <td>
                        <button id="tambah-item" class="btn btn-primary btn-secondary">+</button>
                    </td>
                </tr>
            </thead>
            <tbody id="list-item">
               
            </tbody>
        </table>
    </div>
    <script>
        let daftar_buku = <?= json_encode($listbuku)?>;
        let bukupilih = {}
        let itembuku =[]
        document.getElementById("kode_buku").oninput= function(){
            let kode = document.getElementById("kode_buku").value
            let filterbuku =daftar_buku.filter(buku=>buku.kode_buku.includes(kode.toUpperCase()))
            if(filterbuku.length >0){
                filterbuku =filterbuku.slice(0,5)
                document.getElementById("list_kode_buku").innerHTML= filterbuku.map(buku=>`<option value="${buku.kode_buku}">${buku.kode_buku}-${buku.judul}</option>`).join("")
            }            
        }
        // event textbox
        document.getElementById("jumlah").onfocus = ()=>{
            let kode = document.getElementById("kode_buku").value
            bukupilih=daftar_buku.find(hiu => hiu.kode_buku === kode)
            //isi text
            document.getElementById("judul").value = bukupilih.judul
            document.getElementById("penerbit").value = bukupilih.penerbit
            document.getElementById("harga").value = parseInt(bukupilih.harga).toLocaleString()
        }

        document.getElementById("jumlah").oninput=()=>{
            let jumlah =document.getElementById("jumlah").value
            let subtotal = jumlah *bukupilih.harga
            document.getElementById("subtotal").value = parseInt(subtotal).toLocaleString()
        }

        document.getElementById("tambah-item").onclick = ()=>{
            itembuku.push(bukupilih)
           // koso
           document.getElementById("list-item").innerHTML=""
           // siapkan
           let isi_buku =""
           itembuku.forEach(buku =>{
            isi_buku+=`
                <tr>
                    <td><input type="text" name="" id="kode_buku" class="form-control form-control-sm" readonly value="${bukupilih.kode_buku}">
                        
                    </td>
                    <td><input type="text" name="" id="judul" class="form-control form-control-sm" disabled value="${bukupilih.judul}"></td>
                    <td><input type="text" name="" id="penerbit" class="form-control form-control-sm" disabled value="${bukupilih.penerbit}"></td>
                    <td><input type="text" name="" id="harga" class="form-control form-control-sm" disabled value="${bukupilih.harga}"></td>
                    <td><input type="text" name="" id="jumlah" class="form-control form-control-sm" value="${document.getElementById("jumlah").value}"></td>
                    <td><input type="text" name="" id="subtotal" class="form-control form-control-sm" disabled value"${document.getElementById("subtotal").value}"></td>
                    <td>
                        <button id="tambah-item" class="btn btn-primary btn-secondary">+</button>
                    </td>
                </tr>

            `
           })
           // isi body ygy
           document.getElementById("list-item").innerHTML=isi_buku
           document.getElementById("kode_buku").value=""
           document.getElementById("judul").value=""
           document.getElementById("penerbit").value=""
           document.getElementById("harga").value=""
           
        }
    </script>
</body>
</html>