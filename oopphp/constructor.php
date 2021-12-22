<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  public function __construct($judul = 'judul', $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }
}

$produk = new Produk('naruto', 'mashashi kishimoto', 'shonen jump', 300000);
var_dump($produk);
