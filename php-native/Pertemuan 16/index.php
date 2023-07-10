<?php
session_start();

if (!isset($_SESSION ["login"])) {
   header ("Location: login.php");
   exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataHalaman = 7;
$jumlahData = count(query("SELECT * FROM siswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataHalaman * $halamanAktif) - $jumlahDataHalaman;


// ambil data dari tabel
$siswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataHalaman");

// jika tombol ditekan
if ( isset ($_POST["keyword"])) {
  $siswa = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <style>
    body {
      height: 170vh;
    }

    .container {
      text-align: center;
      display: block;
      justify-content: center;
      align-items: center;
    }

    .add {
      display: block;
      padding: 10px 20px;
      background-color: #999999;
      color: #ffffff;
      text-decoration: none;
      border-radius: 4px;
      margin-bottom: 10px;
      float: left;
    }

    .add:hover {
      background-color: #777777;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Input Data</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Contact Developer</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
      <br>
      <h1>Student List</h1>
      <br>
      <form action="" method="post" class="d-flex">
      <input class="form-control me-2" name="keyword" type="text" placeholder="Search" autofocus autocomplete="off">
        <button class="btn btn-outline-success" name="cari" type="submit">Search</button>
      </form>
      <a href="tambah.php" class="add mt-2">Add Student Data</a>
      <table class="table table-striped table-bordered">
        <thead class="table-dark">
          <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Image</th>
            <th>Name</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Departmen</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($siswa as $row) : ?>
            <tr>
              <td><?= $i;?></td>
              <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>"><i class="bi bi-pencil-square"></i></a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><i class="bi bi-trash3-fill"></i></a>
              </td>
              <td>
                <img src="img/<?= $row["gambar"]; ?>" width="50">
              </td>
              <td><?= $row["nama"]; ?></td>
              <td><?= $row["nis"]; ?></td>
              <td><?= $row["email"]; ?></td>
              <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?php if( $halamanAktif > 1 ) : ?>
      <a href="?halaman <?= $halamanAktif-1;?>">&lt;</a>
      <?php endif; ?>
      <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>            
        <?php if($i == $halamanAktif) : ?>       
        <a style="color: #222; font-weight: bold;" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
      <?php endfor; ?>
      <?php if( $halamanAktif < $jumlahHalaman ) : ?>
      <a href="?halaman=<?= $halamanAktif + 1; ?>">&gt;</a>
      <?php endif; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
