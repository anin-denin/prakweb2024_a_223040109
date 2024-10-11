<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

           public function sayHello() {
            return "$this->penulis, $this->pennerbit";
           }
}

$produk = new Produk ();
$produk->judul = "Naruto";
var_dump($produk1);

$produk2 = new Produk();
$produk2->judul = "Uncharted";
$produk2->tambahProperty = "hahaha";
var_dump($produk2->judul);

$produk3 = new Produk();
$produk->judul = "Naruto";
$produk->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->harga = 250000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo "Game : " . $produk->getLabel();
echo $produk3->sayHello();

?>