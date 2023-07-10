<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

    // ambil data di URL
    $id = $_GET["id"];
    // query data berdasarkan id
    $s = query("SELECT * FROM siswa WHERE id = $id")[0];
    var_dump($s["nama"]);

    // cek info berhasil/gagal diubah data
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
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
      padding-bottom: 20px;
      background-color: #ffffff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
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

    .file-upload {
      display: block;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .file-upload input[type="file"] {
      width: 300px;
      padding: 8px;
      border: 1px solid #cccccc;
      border-radius: 4px;
      text-align: center;
    }
  </style>
</head>
<body>
    <h1>Ubah Data Siswa</h1>
    <div class="container">
    <?php
        // ambil data di URL
        $id = $_GET["id"];
        // query data berdasarkan id
        $s = query("SELECT * FROM siswa WHERE id = $id")[0];
        ?>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $s["id"];?>">
    <input type="hidden" name="gambarLama" value="<?= $s["gambar"];?>">
    <ul>
        <li>
          <label for="nama">Nama:</label> <br>
          <input type="text" name="nama" id="nama" required value="<?= $s["nama"];?>">
        </li>
        <li>
          <label for="nis">NIS:</label> <br>
          <input type="text" name="nis" id="nis" required value="<?= $s["nis"];?>">
        </li>
        <li>
          <label for="email">Email:</label> <br>
          <input type="email" name="email" id="email" required value="<?= $s["email"];?>">
        </li>
        <li>
          <label for="jurusan">Jurusan:</label> <br>
          <input type="text" name="jurusan" id="jurusan" required value="<?= $s["jurusan"]; ?>">
        </li>
        <li>
          <div class="file-upload">
          <label for="gambar">Gambar:</label> <br>
          <img src="img/<?= $s["gambar"]; ?>" width="40px"> <br>
          <input type="file" name="gambar" id="gambar" required>
          </div>
        </li>
        <li>
          <button type="submit" name="submit">Ubah Data</button>
        </li>
      </ul>
    </form>
    <a href="index.php" style="text-decoration: none;">Back <i class="fas fa-arrow-left"></i></a>
    </div>
</body>
</html>