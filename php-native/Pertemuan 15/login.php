<?php
require 'functions.php';

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" />
    <style>
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: "MontSerrat", sans-serif;
        background-color: rgb(128, 128, 128);
      }

      .card {
        width: 400px;
        padding: 50px;
        padding-top: 20px;
        border: 2px solid transparent;
        border-radius: 5px;
        background-color: rgb(187, 184, 184);
        display: flex;
        flex-direction: column;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);
      }

      .card h1 {
        text-align: center;
        color: rgb(0, 0, 0);
      }

      .card label {
        display: block;
        margin-bottom: 8px;
      }

      .card input[type="text"],
      .card input[type="password"] {
        width: 100%;
        padding: 8px 12px; /* Menambahkan padding pada input */
        border: 2px;
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
        background-color: #3b4db6;
        color: white;
        font-weight: bold;
        cursor: pointer;
        font-family: sans-serif;
        margin-top: 10px;
      }

      .card button[type="submit"]:hover {
        background-color: #3b93b6;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <div class="card">
        <h1>Login User</h1>
        <?php if (isset($error)) :?>
        <p style="color: red; font-style:italic;">username/password salah</p>
        <?php endif; ?>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" placeholder="username..." required />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="password..." required />
        <button type="submit" name="login">Login</button>
      </div>
    </form>
  </body>
</html>
