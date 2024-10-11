<?php

// Kelas dasar Produk
class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // Constructor untuk inisialisasi properti
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Fungsi untuk mendapatkan label penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Fungsi abstrak untuk mendapatkan informasi detail produk (di override oleh kelas turunan)
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Kelas Komik (turunan dari Produk)
class Komik extends Produk {
    public $jmlHalaman;

    // Constructor untuk inisialisasi Komik
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    // Override getInfoProduk khusus untuk Komik
    public function getInfoProduk() {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

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

// Kelas untuk mencetak informasi produk
class CetakInfoProduk {
    public function cetak(Produk $produk) {
        // Menghasilkan string informasi produk
        return $produk->getInfoProduk();
    }
}

// Membuat objek produk Komik dan Game
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Membuat objek untuk mencetak informasi produk
$cetakProduk = new CetakInfoProduk();

// Menampilkan informasi produk
echo $cetakProduk->cetak($produk1);
echo "<br>";
echo $cetakProduk->cetak($produk2);

?>
