<?php
if (isset($_POST['login'])) { // isset = apabila tombol login ditekan maka... ('login' diambil dari name button)
  $username = $_POST['username']; // mengambil field username yang diambil dari input dengan name username
  $password = $_POST['password']; // mengambil field password yang diambil dari input dengan name password

  if ($username == 'esha' and $password == 'fesloth' and $email == 'sazzaliee@gmail.com') {
    echo "<script>
          alert('Login Berhasil'); 
          window.location = 'php/index.php';
          </script>"; // redirect...redirect adalah melemparkan user ke halaman lain apabila user melakukan interaksi
  } else { // jika salah satu kolom atau lebih ada kesalahan saat menginputkannya maka munculkan...
    echo "<script>alert('Username, Password atau Email salah');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Login dengan SweetAlert</title>
    <!-- SweetAlert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
      body {
        background-color: #4a4e69;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
      }

      form {
        margin: auto;
        width: 50%;
        border: 3px solid #f1f1f1;
        padding: 30px;
        background-color: white;
        color: #4a4e69;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.75);
        border-radius: 0;
      }

      label {
        display: block;
        margin: 10px 0;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 10px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        font-size: 16px;
        border-radius: 0;
      }

      button {
        background-color: #4a4e69;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 16px;
        border-radius: 50px;
        box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.25);
        transition: all 0.3s ease-in-out;
      }

      button:hover {
        background-color: #3c3e54;
        box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.25);
        transform: translateY(-2px);
      }

      .error-message {
        color: red;
        font-size: 14px;
        margin-top: 5px;
      }

      h1 {
        text-align: center;
        font-family: sans-serif;
        color: black;
      }
    </style>
  </head>
  <body>
    <form action="php/index.php" method="post">
      <h1>Login Admin</h1>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Masukkan Username Anda" name="username" id="username" required />

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Masukkan Password Anda" name="password" id="password" required />

      <button type="submit" name="login">Login</button>

      <div id="error-message" class="error-message" style="display: none"></div>
    </form>

    <script>
      document.querySelector("#login-button").addEventListener("click", function (e) {
        e.preventDefault();

        var username = document.querySelector("#username").value;
        var password = document.querySelector("#password").value;

        if (username == "" && password == "") {
          // Memunculkan pesan error menggunakan SweetAlert
          Swal.fire({
            title: "Error!",
            text: "Username dan password belum diisi",
            icon: "error",
            confirmButtonText: "OK",
          });
          document.querySelector("#username").value = "";
          document.querySelector("#password").value = "";
          return;
        }

        if (username == "") {
          Swal.fire({
            title: "Error!",
            text: "Username belum diisi",
            icon: "error",
            confirmButtonText: "OK",
          });
          document.querySelector("#username").value = "";
          return;
        }

        if (password == "") {
          Swal.fire({
            title: "Error!",
            text: "Password belum diisi",
            icon: "error",
            confirmButtonText: "OK",
          });
          document.querySelector("#password").value = "";
          return;
        }

        if (username == "syahla" && password == "202580") {
          Swal.fire({
            title: "Berhasil!",
            text: "Anda berhasil login",
            icon: "success",
            confirmButtonText: "OK",
          }).then(function () {
            // Jika berhasil, redirect ke halaman lain
            window.location.href = "/php/index.php";
          });
        }
      });
    </script>
  </body>
</html>
