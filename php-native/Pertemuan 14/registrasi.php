<?php 

require 'functions.php';
// ketika tombol button register ditekan

if(isset($_POST["register"])) {
  if (register($_POST) > 0) {
    echo "<script>
      alert('User baru berhasil ditambahkan!');
    </script>";
  } else {
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" />
    <style>
        body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: "MontSerrat", sans-serif;
        background-color: white;
      }

      .card {
        width: 400px;
        padding: 50px;
        padding-top: 20px;
        border: 2px solid transparent;
        border-radius: 5px;
        background-color: grey;
        display: flex;
        flex-direction: column;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
      }

      .card h1 {
        text-align: center;
        color: rgb(18, 43, 63);
      }

      .card label {
        display: block;
        margin-bottom: 8px;
      }

      .card input[type="text"],
      .card input[type="email"],
      .card input[type="password"] {
        width: 100%;
        padding: 8px 12px; /* Menambahkan padding pada input */
        border: 1px;
        border-radius: 3px;
        margin-bottom: 10px;
        box-sizing: border-box; /* Memastikan padding tidak mempengaruhi lebar total input */
        font-size: 15px; /* Mengatur ukuran font pada input */
      }

      .card button[type="submit"] {
        width: 100%;
        padding: 10px 3px;
        border: none;
        border-radius: 5px;
        background-color: #1c1e40;
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-family: sans-serif;
        margin-top: 10px;
      }

      .card button[type="submit"]:hover {
        background-color: #51577b;
      }
    </style>
</head>
<body>
    <form action="" method="post">
          <div class="card">
            <h1>Registrasi</h1>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="username..." required />
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="password..." required />
            <label for="text">Confirm Password:</label>
            <input type="password" id="password2" name="password2" placeholder="confirm..." required />
            <button type="submit">Register!</button>
          </div>
    </form>
</body>
</html>