<?php
$Siswa = [
    ["Syahla Nur Azizah", "10273", "Rekayasa Perangkat Lunak", "Perempuan"],
    ["Niluh Putu Sekar Ayu Puspa", "10269", "Rekayasa Perangkat Lunak", "Perempuan"]

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array numerik</title>
</head>

<body>
    <h1>DATA SISWA</h1>
    <?php foreach ($Siswa as $S) : ?>
        <ul>
            <li>Nama: <?= $S[0]; ?></li>
            <li>NIS: <?= $S[1]; ?></li>
            <li>Jurusan: <?= $S[2]; ?></li>
            <li>Jenis Kelamin: <?= $S[3]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>