<?php

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo," . self::$angka++ . " kali.";
//   }
// }

// echo  ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

// nilai akan direset lagi saat instansisasi objek baru jika tidak menggunakan static
// class Contoh
// {
//   public $angka = 1;

//   public function halo()
//   {
//     return "Halo," . $this->angka++ . " kali. <br>";
//   }
// }

// $obj = new Contoh();
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<hr>";

// $obj2 = new Contoh();
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();

// nilai akan selalu tetap jika menggunakan static
class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo," . self::$angka++ . " kali. <br>";
  }
}

$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
