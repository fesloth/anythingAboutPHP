<?php
require 'functions.php';

// ambil data dari tabel
$siswa = query("SELECT * FROM siswa");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <style>
      body {
        height: 100vh;
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

      table {
        border-collapse: collapse;
        width: 100%;
      }

      table th,
      table td {
        padding: 10px;
        border: 1px solid #ccc;
      }

      table th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Daftar Siswa</h1>
      <a href="tambah.php" class="add">Add Student Data</a>
      <table>
        <thead>
          <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIS</th>
            <th>Email</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach($siswa as $row) : ?>
            <tr>
              <td><?= $i;?></td>
              <td>
                <a href="#"><i class="bi bi-pencil-square"></i></a> |
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
