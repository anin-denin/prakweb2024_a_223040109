<?php

// Interface for product info
interface InfoProduk {
    public function getInfoProduk(); 
}

// Class Produk representing a generic product
class Produk {
    private $judul,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga; // Declared $harga which was missing earlier

    // Constructor to initialize product attributes
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Set and get methods for each attribute
    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    // Get final price after discount
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Get label (penulis and penerbit)
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // Method to get detailed product info
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

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

// Game class inheriting Produk and implementing InfoProduk
class Game extends Produk implements InfoProduk {
    public $waktuMain;

    // Constructor for Game class
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    // Overriding getHarga to use parent's method
    public function getHarga() {
        return parent::getHarga();
    }

    // Overriding getInfoProduk to include playtime
    public function getInfoProduk() {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }

    // Another method to get product info
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

// Class to handle printing product information
class CetakInfoProduk {
    public $daftarProduk = array(); // Array to store products

    // Method to add a product to the list
    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }

    // Method to print product list
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";
        
        // Loop through products and append each info to the string
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str; // Return the string to be printed
    }
}

// Creating Komik and Game objects
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Creating an instance of CetakInfoProduk and adding products to the list
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Printing the product list
echo $cetakProduk->cetak();

?>
