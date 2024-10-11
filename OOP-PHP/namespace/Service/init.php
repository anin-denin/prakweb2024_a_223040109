<?php

require_once 'App/Produk/InfoProduk.php';
require_once 'App/Produk/Produk.php';
require_once 'App/Produk/Komik.php';
require_once 'App/Produk/Game.php';
require_once 'App/Produk/CetakInfoProduk.php';
require_once 'Produk/User.php';
require_once 'Service/User.php';

spl_autoload_register(function ($class) {
    // To handle namespaced classes, explode the namespace and get the actual class name
    $class = explode('\\', $class);
    $class = end($class); // Getting the class name

    // Handling for 'Produk' namespace
    if (file_exists(__DIR__ . '/Produk/' . $class . '.php')) {
        require_once __DIR__ . '/Produk/' . $class . '.php';
    }

    // Handling for 'Service' namespace
    if (file_exists(__DIR__ . '/Service/' . $class . '.php')) {
        require_once __DIR__ . '/Service/' . $class . '.php';
    }
});

?>
