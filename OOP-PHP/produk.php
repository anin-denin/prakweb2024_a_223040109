<?php

class Produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // Menambahkan metode sayHello() untuk menghindari error saat dipanggil
    public function sayHello() {
        return "Hello, ini produk: {$this->judul}";
    }
}

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->harga = 250000;

echo "Komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo "Game : " . $produk->getLabel();
echo $produk3->sayHello();

?>
