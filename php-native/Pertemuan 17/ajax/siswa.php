<?php
require '../functions.php';

$keyword =  $_GET["keyword"];
$query = "SELECT * FROM siswa WHERE
            nama LIKE '%$keyword%' OR
            nis LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '$keyword%'
            ";
$siswa = query($query);
?>
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
        <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
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