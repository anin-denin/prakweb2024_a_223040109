<?php

require_once 'App/init.php';

// Creating Komik and Game objects
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

// Creating an instance of CetakInfoProduk and adding products to the list
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

// Printing the product list
echo $cetakProduk->cetak();

echo "<hr>";

// Corrected: Using the fully qualified namespace for creating new objects
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();

// First autoloader for Produk namespace
spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $class = end($class); // Getting the class name
    require_once __DIR__ . '/Produk/' . $class . '.php'; // Path fix
}); 

// Second autoloader for Service namespace
spl_autoload_register(function ($class){
    $class = explode('\\', $class);
    $class = end($class); // Getting the class name
    require_once __DIR__ . '/Service/' . $class . '.php'; // Path fix
}); 

?>
