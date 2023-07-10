<?php
// latihan untuk develop
// ini array versi baru
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
$arr1 = [123, "tulisan", false];
$hari1 = ["senin", "selasa"];


// menampilkan array
// versi debbuging
var_dump($bulan);
// var_dump lebih lengkap
echo "<br>";
print_r($hari);
// print_r lebih singkat
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

var_dump($hari1);
$hari1[] = "Rabu";
$hari1[] = "Kamis";
var_dump($hari1);
