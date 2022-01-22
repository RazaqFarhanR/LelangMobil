<?php
    session_start();
    if ($_SESSION['status_login'] != true) {
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CarHunter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-lg-6 col-md-8 mx-auto align-items-start">
          <form method="POST" action="tampil_barang.php" class="d-flex">
              <input class="form-control me-2" type="search" name="cari"
              placeholder="Cari Barang Disini" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
      </div>
      <div class="col-lg-2 col-md-6 mx-auto">
  </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="tampil_barang.php">Daftar Mobil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="riwayat_lelang.php">Riwayat lelang</a>
          </li>
          <li>
            <a class="nav-link" href="proses_logout.php">Logout</a>
          </li>
        </ul>
    </div>
  </div>
</nav>
</body>
</html>    