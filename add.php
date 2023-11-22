<?php 
require"functions.php";

if(isset($_POST["submit"])) {
    if(add($_POST) > 0) {
        echo "
        <script>
            alert('barang berhasil ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('barang gagal ditambahkan ditambahkan');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>inventarisWeb</title>
</head>
<body>

<!-- NAVIGASI -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-light" href="#">inventarisWeb</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="add.php">Barang Masuk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="out.php">Barang Keluar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- content -->

<div class="container-sm">
    

    <h1 class="text-primary">BARANG MASUK</h1>
    <!-- form input barang masuk -->
<form action="" method="post" >
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label col-form-label-lg">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="nama" placeholder="" name="nama">
        </div>
    </div>
    <div class="row mb-3">
        <label for="merek" class="col-sm-2 col-form-label col-form-label-lg">Merek</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="merek" name="merek" placeholder="">
        </div>
    </div>
    <div class="row mb-3">
        <label for="serial_number" class="col-sm-2 col-form-label col-form-label-lg">Serial Number</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="serial_number" placeholder="" name="serial_number">
        </div>
    </div>
    <div class="row mb-3">
        <label for="jumlah" class="col-sm-2 col-form-label col-form-label-lg">Jumlah</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-lg" id="jumlah" name="jumlah" placeholder="">
        </div>
    </div>
    <div class="col-auto">
        <button type="submit" name="submit" class="btn btn-primary">tambah</button>
    </div>
    
    
</form>    


</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>