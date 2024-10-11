<?php

abstract class Produk {
    // Visibility public (diubah ke private)
    private $judul,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga; // Tambahkan $harga di sini karena belum dideklarasikan.

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

    // Pembetulan: Typo pada kata "funtion" -> "function"
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

    // Pembetulan: "getPenerbit" sebelumnya salah, fungsinya harus mengambil penerbit
    public function getPenerbit() {
        return $this->penerbit;
    }

    // Method untuk mengatur diskon
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    // Pembetulan: Typo "funnctiongetDiskon" -> "function getDiskon"
    public function getDiskon() {
        return $this->diskon;
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

// Pembetulan: Typo pada class "CetakInfoPriduk" menjadi "CetakInfoProduk"
class CetakInfoProduk {
    public $daftarProduk = array();

    // Method untuk menambahkan produk ke daftar
    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    // Method untuk mencetak daftar produk
    public function cetak() { // Menghapus parameter $produk karena tidak diperlukan
        $str = "DAFTAR PRODUK : <br>";

        // Looping daftar produk
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str; // Tambahkan return agar hasil bisa ditampilkan
    }
}

// Membuat objek dari kelas Komik
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// Membuat objek dari kelas Game
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Membuat objek dari kelas CetakInfoProduk dan menambahkan produk ke daftar
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Mencetak daftar produk
echo $cetakProduk->cetak();

?>
