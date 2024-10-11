<?php

require_once 'App/init.php';


// Komik class inheriting Produk and implementing InfoProduk
class Komik extends Produk implements InfoProduk {
    public $jmHalaman;

    // Constructor for Komik class
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmHalaman = $jmHalaman;
    }

    // Overriding getInfoProduk to include number of pages
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmHalaman} Halaman.";
        return $str;
    }

    // Another method to get product info
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

echo "<hr>";

new User();

?>