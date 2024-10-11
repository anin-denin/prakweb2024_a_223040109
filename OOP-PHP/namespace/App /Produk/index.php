<?php

require_once 'App/init.php';


// Creating Komik and Game objects
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Creating an instance of CetakInfoProduk and adding products to the list
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Printing the product list
echo $cetakProduk->cetak();

echo "<hr>";



?>