<?php

class Product
{
    // property atau data dari produk
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
}

$produk = new Product();
$produk->judul = "Naruto";
$produk->penulis = "Masashi Kishimoto";
$produk->penerbit = "Shounen Jump";
$produk->harga = 30000;

echo "Komik: $produk->penulis, $produk->penerbit";
