<?php
// SINTAKS PHP

// standar output
// echo, print, print_r (untuk array), var_dump(melihat isi variabel) 
// print_r dan var_dump harus pakai ("");
// echo tidak perlu pakai "" kalau angka
// echo "\n"; untuk spasi
// echo "<br>"; untuk enter

// echo "Leo Tsukinaga";
// echo boolean
// echo true; hasilnya 1
// echo string bisa pakai "" dan ''

// penulisan sintaks php
// 1. php di dalam html
/* contoh: <h1>Hello <php? echo World!; ?></h1>
// 2. html di dalam php
// contoh: <?php echo "<h1>Hello World!</h1>" ?>

*/
// variabel dan tipe data
/* variabel
$nama = "Leo Tsukinaga";
$nama1 = "Tsukasa Suou";
echo "Welcome $nama1";
*/
// operator
// operator tidak boleh ada spasi, jika ingin spasi maka tambahkan _
// aritmatika
// + - * / %
// contoh : 
// $x = 50;
// $y = 5;
// echo $x / $y;

// penggabung string / concatenation / concat
// pakai titik .
// $nama_depan = "Leo";
// $nama_belakang = "Tsukinaga";
// echo $nama_depan . $nama_belakang;
// jika ingin menambah spasi maka:
// $nama_depan = "Leo";
// $nama_belakang = "Tsukinaga";
// echo $nama_depan . " ". $nama_belakang;

// assignment (operator penugasan)
// =, +=, -=, *=, /=, %=, .=
/*apabila kita menulis
$x = 6;
$x = 3;
echo $x;
maka yang terlihat hanyalah 3, kkarena yang 6 tertimpa
namun apabila
$x = 6;
$x *= 3;
echo $x;
maka $x hasilnya 18 karena komputer mengalikan kedua operator tersebut
fungsi lain assignment juga bisa untuk:
$nama = "tsukasa";
$nama .= " ";
$nama .= "suou";
echo $nama;
*/

// perbandingan
// <, >, <=, >=, ==, !=
// contoh: untuk menampilkan boolean, kita bisa menulis var_dump(1 > 5); maka akan menampilkan true atau false

// identitas
// bedanya dengan perbandingan adalah, dalam identitas dia memerhatikan tipe data
// jadi misal: var_dump (1==="1") maka jawabannya akan salah
// ===, !== 

// logika
// &&, || (ini tanda diatas enter), !
