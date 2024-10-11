<?php

// Kelas Game (turunan dari Produk)
class Game extends Produk {
    public $waktuMain;

    // Constructor untuk inisialisasi Game
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Override getInfoProduk khusus untuk Game
    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


?>