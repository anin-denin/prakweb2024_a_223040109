<?php

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    // Constructor for the Produk class
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // Function to get a label of the product
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk {
    // Function to print product information
    public function cetak(Produk $produk) {
        // Here, we ensure that $produk is of type Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Create product objects
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);

// Create an instance of CetakInfoProduk to display the product details
$cetakProduk = new CetakInfoProduk();

// Output the results
echo "Komik : " . $cetakProduk->cetak($produk1);
echo "<br>";
echo "Game : " . $cetakProduk->cetak($produk2);

?>
