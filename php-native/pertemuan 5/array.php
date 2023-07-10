<?php
// ARRAY
// yaitu variabel yang dapat menampung banyak nilai
// array adalah pasangan antara key dan value
// key nya adalah index, yg dimulai dari 0 jika menggunakan var_dump
// ilustrasi variabel itu adalah seperti misal
/* jika ingin menulis variabel nama nama hari maka 
$hari = "Senin";
$hari = "Selasa";
program ini akan menampilkan nama hari namun hanya hari selasa, karena hari senin sudah tertimpa
lalu bagaimana agar senin dan selasa terlihat?
tentu saja dengan membedakan nama variabel, contohnya
$hari1 = "Senin";
$hari2 = "Selasa";
Tapi pasti akan sulit untuk menampung banyak variabel
Jadi kesimpulannya array sangatlah diperlukan
 */

 // ada 2 cara untuk memanggil array
// cara lama
// $hari = array("Senin", "Selasa"); element string harus menggunakan kutip, kalau integer tidak usah
// cara baru
// $bulan = ["Januari", "Februari"];

// element pada array tipe data boleh beda
// contoh $arr1 = [123, "tulisan", false];

// cara menampilkan array
// cara menampilkan variabel kan dengan echo, nah array beda lagi
// menampilkan 1 elemen pada array baru menggunakan echo
// ada 2 cara yaitu
// var_dump() / print_r()


// hasil dari latihan

/*array(12) {
    [0]=>
    string(7) "Januari"
    [1]=>
    string(8) "Februari"
    [2]=>
    string(5) "Maret"
    [3]=>
    string(5) "April"
    [4]=>
    string(3) "Mei"
    [5]=>
    string(4) "Juni"
    [6]=>
    string(4) "Juli"
    [7]=>
    string(7) "Agustus"
    [8]=>
    string(9) "September"
    [9]=>
    string(7) "Oktober"
    [10]=>
    string(8) "November"
    [11]=>
    string(8) "Desember"
  }
  
dibacanya begini, array yang jumlah element nya 12, yg didalamnya ada 0 sama dengan lebih besar dari... 
[0]=>
    string(7) "Januari" adalah elemen pertama pada array
maksudnya 0 adalah index pertama elemen pada array yang diawali dengan angka 0 
yang isinya string berjumlah 7 isinya januari */

// menambahkan elemen baru pada , contoh:

/*
$hari = ["senin", "selasa"]
var_dump($hari);
$hari[] = "Rabu";
$hari[] = "Kamis";
$hari[] = "Jumat";
$hari[] = "Sabtu";
$hari[ = "minggu";
var_dump($hari);

?>

