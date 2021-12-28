<?php
// deklarasi menggunakan define
// define("NAMA", "shandika galih");

// echo NAMA;
// echo "<br>";

// deklarasi menggunakan const
// const UMUR = 32;
// echo UMUR;

// coba deklarasi di dalam class
// define
// class Coba{
//   define("NAMA", "shandika");
// }

// maka akan error

// const
// class Coba
// {
//   const NAMA = 'shandika';
// }

// echo Coba::NAMA;

// tidak ada error

// -----------------------------------------------------------
// Magic Constant

echo __LINE__; //memberitahu line yang ditulis 
echo "<hr>";
echo __FILE__; //memberitahu file yang aktif
echo "<hr>";
echo __DIR__; // memberitahu direktori yang aktif
echo "<hr>";

function coba()
{
  echo __FUNCTION__; //memberitahu nama function
}

echo coba();

echo "<hr>";
