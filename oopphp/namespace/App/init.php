<?php

// cara manual
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';


// cara autoloading
// syntaxnya
// function autoload($class)
// {

// }

// spl_autoload_register(autoload());

// atau kita bisa menggunakan closure/fungsi tanpa nama

// spl_autoload_register(function ($class) {
//   require_once'Produk/' . $class . '.php';
// });

// lengkapnya
spl_autoload_register(function ($class) {
  // $class disini adalah tiap2 class/file yang ada di dalam produk 
  // dimana akan dipanggil otomatis satu per satu
  // dan saat sudah sampai ke User.php
  // dan karena sudah di namespace
  // maka menjadi
  // $class = App\Produk\User
  // diexplode menjadi = ['App', 'Produk', 'User']
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
  // $class disini adalah tiap2 class/file yang ada di dalam produk 
  // dimana akan dipanggil otomatis satu per satu
  // dan saat sudah sampai ke User.php
  // dan karena sudah di namespace
  // maka menjadi
  // $class = App\Produk\User
  // diexplode menjadi = ['App', 'Produk', 'User']
  $class = explode('\\', $class);
  $class = end($class);
  require_once __DIR__ . '/Service/' . $class . '.php';
});
