<?php

class Produk {
    // Visibility public (diubah ke private)
    private $judul,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga; // Tambahkan $harga di sini karena sebelumnya belum dideklarasikan.

    // Constructor untuk menginisialisasi objek
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Method untuk mengatur judul
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    // Method untuk mengambil judul
    public function getJudul() {
        return $this->judul;
    }

    // Pembenaran: Typo pada kata "funtion" menjadi "function"
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    // Method untuk mengatur penerbit
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    // Typo di sini, sebelumnya "setPenerbit" tapi isinya "return" padahal tidak perlu.
    public function getPenerbit() {
        return $this->penerbit;
    }

    // Method untuk mengatur diskon
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Method untuk mengatur harga
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Method untuk mengambil harga setelah diskon
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Mengambil label berupa penulis dan penerbit
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Mengambil informasi produk secara lengkap
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Kelas turunan dari Produk untuk Komik
class Komik extends Produk {
    public $jmHalaman;

    // Constructor untuk menginisialisasi Komik
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmHalaman = 0) {
        // Memanggil constructor parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmHalaman = $jmHalaman;
    }

    // Overriding method untuk menambahkan info halaman
    public function getInfoProduk() {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmHalaman} Halaman.";
        return $str;
    }
}

// Kelas turunan dari Produk untuk Game
class Game extends Produk {
    public $waktuMain;

    // Constructor untuk menginisialisasi Game
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        // Memanggil constructor parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Overriding method untuk mengambil harga
    public function getHarga() {
        return parent::getHarga(); // Memanggil method getHarga() dari class Produk
    }

    // Overriding method untuk menambahkan info waktu main
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// Membuat objek dari kelas Komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// Membuat objek dari kelas Game
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Menampilkan info produk
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

// Mengatur diskon untuk produk Game
$produk2->setDiskon(50);
// Menampilkan harga setelah diskon
echo $produk2->getHarga();
echo "<hr>";


$produk1->setPenulis("Sandhika Galih");
// Menampilkan judul produk
echo $produk1->getJudul();

?>
