<?php

require_once 'App/Produk/InfoProduk.php';
require_once 'App/Produk/Produk.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';

// Autoloading function to load classes automatically
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Produk/' . $class . '.php'; // Fixed concatenation and missing slash
});

?>
