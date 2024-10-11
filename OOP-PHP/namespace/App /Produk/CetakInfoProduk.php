<?php
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


?>