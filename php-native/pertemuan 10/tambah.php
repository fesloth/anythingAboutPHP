<?php 
require 'functions.php';

// cek apakah tombo; submit sudah ditekan atau belum
if(isset ($_POST["submit"])) {
    

   

    // cek info berhasil/gagal input data
    if( tambah ($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
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
    <title>Create</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
      integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
      crossorigin="anonymous"
    />
    <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #333333;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin-bottom: 20px;
    }

    li {
      margin-bottom: 10px;
      text-align: center;
    }

    label {
      display: inline-block;
      width: 100px;
      color: #666666;
  
    }

    input[type="text"],
    input[type="email"] {
      width: 300px;
      padding: 8px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      text-align: center;
    }

    button {
      padding: 10px 20px;
      background-color: #666666;
      color: #ffffff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #555555;
    }
  </style>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <div class="container">
    <form action="" method="post">
    <ul>
        <li>
          <label for="nama">Nama:</label> <br>
          <input type="text" name="nama" id="nama" required>
        </li>
        <li>
          <label for="nis">NIS:</label> <br>
          <input type="text" name="nis" id="nis" required>
        </li>
        <li>
          <label for="email">Email:</label> <br>
          <input type="email" name="email" id="email" required>
        </li>
        <li>
          <label for="jurusan">Jurusan:</label> <br>
          <input type="text" name="jurusan" id="jurusan" required>
        </li>
        <li>
          <label for="gambar">Gambar:</label> <br>
          <input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
          <button type="submit" name="submit">Tambah Data</button>
        </li>
      </ul>
    </form>
    <a href="index.php" style="text-decoration: none;">Back <i class="fas fa-arrow-left"></i></a>
    </div>
</body>
</html>