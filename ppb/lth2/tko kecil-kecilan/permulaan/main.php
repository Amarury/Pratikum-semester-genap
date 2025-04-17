<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Bheka</title>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/main.css">
    <link rel="stylesheet" href="../assets/bt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class=" bg-body-tertiary">
    <div id="main" class="d-flex">
        <?php
        include "../template/sidebar.php";

        // halaman
        $halaman = isset($_GET['halaman'])? $_GET['halaman']:"dashboard";
        // if
        if(file_exists("../page/$halaman.php")){
            include "../page/$halaman.php";
        }else{
            echo "halaman tidak ada";
        }
        ?>

        
    </div>
</body>

</html>