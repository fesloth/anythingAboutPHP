<?php

class Product
{
    // property atau data dari produk
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;
}

// method
$produk1 = new Product();
// mengubah data property dengan menimpa
$produk1->judul = "Detective Conan";
var_dump($produk1);

$produk2 = new Product();
var_dump($produk2->$judul);
// yang akan muncul yaitu nilai default bukan 'detective conan'
