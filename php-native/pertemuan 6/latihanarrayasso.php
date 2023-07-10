<?php 
$siswa = [
    [
        "nama" => "Syahla Nur Azizah", 
        "nrp" => "10273",
        "email" => "sazzaliee@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "tugas" => [100, 90, 98, 100],
        "gambar" => "hori.jpg"
    ],
    [
        "nama" => "Niluh Putu Sekar Ayu Puspa", 
        "nrp" => "10269",
        "email" => "karayuu@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "Sleepy cutie.jpeg"
    ],
    [
        "nama" => "Namira Nizma Rezkia", 
        "nrp" => "10268",
        "email" => "trickyhouse@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "aranee.jpeg"
    ],
    [
        "nama" => "Aurellia Az-Zahra", 
        "nrp" => "10247",
        "email" => "auurelll@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "miyano.jpeg"
    ],
    [
        "nama" => "Erlang Andiyanputra", 
        "nrp" => "10249",
        "email" => "IopeRan@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "sena.jpeg"
    ]

    
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
    <?php foreach ($siswa as $S) : ?>
        <ul>
            <li style="list-style: none;">
                <img src="img/<?= $S["gambar"];?>" width="200px" height="auto">
            </li>
            <li>Nama: <?= $S["nama"]; ?></li>
            <li>NIS: <?= $S["nrp"]; ?></li>
            <li>Email: <?= $S["email"]; ?></li>
            <li>Jurusan: <?= $S["Jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>