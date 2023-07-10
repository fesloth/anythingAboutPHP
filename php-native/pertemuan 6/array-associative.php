<?php 

// array assosiative
// key nya adalah string yang kita buat sendiri
$siswa = [
    [
        "nama" => "Syahla Nur Azizah", 
        "nrp" => "10273",
        "email" => "sazzaliee@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak",
        "tugas" => [100, 90, 98, 100]
    ],
    [
        "nama" => "Niluh Putu Sekar Ayu Puspa", 
        "nrp" => "10269",
        "email" => "karayuu@gmail.com",
        "Jurusan" => "Rekayasa Perangkat Lunak"
    ]
    
    ];

echo $siswa[1]["email"];
echo "<br>";
echo $siswa[0]["tugas"][3];

// bedanya dengan array numerik adalah, ketika memanggil data, array numerik menggunakan index seperti [0], [1]
// sedangkan array associative memanggil data dengan string yang dibuat sendiri



?>