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


?>