<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel
$result = mysqli_query($conn, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
  </head>
  <body>
    <h1>Daftar Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <tr>
      <?php $i = 1; ?>
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <td><?= $i;?></td>
        <td>
          <a href="#">Edit</a> |
          <a href="#">Delete</a>
        </td>
        <td>
          <img src="img/<?php echo $row["gambar"]; ?>" width="50">
        </td>
        <td><?= $row ["nis"]; ?></td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["email"];?></td>
        <td><?= $row ["jurusan"];?></td>
      </tr>
      <?php $i++; ?>
      <?php endwhile; ?>
    </table>
  </body>
</html>
