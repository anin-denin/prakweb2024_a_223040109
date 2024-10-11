<?php
//define(name,value)
// Menggunakan define untuk mendefinisikan constant
define('NAMA', 'ANIN :D');

// Menampilkan constant
echo NAMA;

echo "<br>";

// Menggunakan const untuk mendefinisikan constant
const UMUR = 32;
echo UMUR;

echo "<br>";

// Class dengan constant
class Coba {
    const NAMA = 'Ann';

    // Akses constant dalam class harus di luar definisi class
}

// Menampilkan constant dari class menggunakan 'scope resolution operator' ::
echo Coba::NAMA;

echo "<br>";

// Class Coba2 menggunakan magic constant __CLASS__
class Coba2 {
    public $kelas = __CLASS__; // Menyimpan nama class
}

// Membuat object dari Coba2
$obj = new Coba2;
echo $obj->kelas;

?>
