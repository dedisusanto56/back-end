<?php

// jualan produk
// komik
// game

class ProdukNoConstruct
{
  public $judul = 'judul',
    $penulis = 'penulis',
    $penerbit = 'penerbit',
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk1 = new ProdukNoConstruct();
$produk1->judul = 'naruto';
$produk1->penulis = 'mashashi kishimoto';
$produk1->penerbit = 'shonen jump';
$produk1->harga = 100000;


echo "Komik : $produk1->judul, $produk1->penulis";
echo "<br>";
