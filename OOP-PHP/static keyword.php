<?php

// Class with static property and method
class ContohStatic {
    public static $angka = 1;

    // Static method
    public static function halo() {
        return "Halo " . self::$angka . " kali.";
    }
}

// Akses static property dengan benar
echo ContohStatic::$angka;
echo "<br>";

echo ContohStatic::halo(); 

echo "<hr>";

// Class biasa dengan non-static property dan method
class Contoh {
    public $angka = 1;

    // Non-static method, pakai $this untuk akses property
    public function halo() {
        return "Halo " . $this->angka . " kali.<br>";
    }
}

// Buat object dari class Contoh
$obj = new Contoh;

// Panggil method berkali-kali, property $angka tidak berubah (karena non-static)
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

// Buat object baru, nilai $angka tetap 1 (karena non-static)
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>
