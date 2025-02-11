<?php
include "../capcut/config_ff.php";

$query = "select * from books";
$hdi = $buku -> query($query);

$listbuku = [];
while ($data = $hdi->fetch_assoc()){
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="" id="kode_buku" class="form-control form-control-sm" list="list_kode_buku">
                        <datalist id="list_kode_buku">
                            
                        </datalist>
                    </td>
                    <td><input type="text" name="" id="judul" class="form-control form-control-sm"></td>
                    <td><input type="text" name="" id="penerbit" class="form-control form-control-sm"></td>
                    <td><input type="text" name="" id="harga" class="form-control form-control-sm"></td>
                    <td><input type="text" name="" id="jumlah" class="form-control form-control-sm"></td>
                    <td><input type="text" name="" id="subtotal" class="form-control form-control-sm"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
        let daftar_buku = <?= json_encode($listbuku)?>
        document.getElementById("kode_buku").oninput= function(){.
            let kode = this.value
            let filterbuku =daftar_buku.filter(buku=>buku.kode_buku.includes(kode))
            if(filterbuku.lenght >0){
                filterbuku =filterbuku.slice(0,5)
                document.getElementById("list_kode_buku").innerHTML= filterbuku.map(jay=>`<option value="${buku.kode}">${buku.kode}-${buku.judul}</option`).join("")
            }
        }
    </script>
</body>
</html>