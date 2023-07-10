<?php

// DATE AND TIME

// date
// echo date("l, d-M-Y");
//  l artinya tampilkan hari saja
//  d artinya tampilkan tanggal
//  m kecil artinya bulan dalam bentuk angka
//  M besar artimya bulan dalam bentuk teks
//  Y artinya tahun

// time
// time boleh kosong
// echo time();
// time menunjukkan detik UNIX Timestamp yaitu waktu didunia komputer
// detik yg sudah berlalu sejak 1 Januari 1970

// mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 11, 12, 2007));

// strtotime
// sama dengan mktime tapi berbentuk string
// echo date("l", strtotime("12 nov 2007"));

// STRING

// strlen
// menghitung panjang sebuah string

// strcmp
// membandingkan 2 string

// explode
// memecah sebuah string menjadi array

// htmlspecialchars
// menjaga website dari hacker

// UTILLITY

// var_dump
// fungsi untuk mencetak isi dari sebuah variabel, array, objek

// isset
// mengecak apakah sebuah variabel sudah pernah dibuat atau belum
// menghasilkan boolean (true/false)

// empty
// apakah variabel kosong atau tidak

// die
// menghentikan program 

// sleep
// memberhentikan sementara selama beberapa detik
