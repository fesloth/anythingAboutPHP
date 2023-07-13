<?php

class Product
{
    // property atau data dari produk
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk = new Product();
$produk->judul = "Naruto";
$produk->penulis = "Masashi Kishimoto";
$produk->penerbit = "Shounen Jump";
$produk->harga = 30000;

$produk2 = new Product();
$produk2->judul = "Uncharted";
$produk2->penulis = "Neil Druckmann";
$produk2->penerbit = "Sony Computer";
$produk2->harga = 250000;

echo "Komik: " . $produk->getLabel();
echo "<hr>";
echo "Game: " . $produk2->getLabel();
