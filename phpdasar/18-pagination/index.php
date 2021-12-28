<?php 
session_start();

if( !isset($_SESSION["login"]) ){
  header("Location: login.php");
  exit;
}


// menghubungkan ke function.php
require 'function.php';
// atua
// include "function.php";

// ambil data dari tabel mahasiswa
//$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC"); //jika ingin mengurutkan berdasarkan id dari yang terbesar ke terkecil
//$mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC"); //jika ingin mengurutkan berdasarkan id dari yang terkecil ke terbesar
//$mahasiswa = query("SELECT * FROM mahasiswa WHERE nrp ='321654987'"); //menampilkan data berdasarkann nrp tsb
//$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 3"); //jika parameternya 1, berarti jumlah data yang ditampilkan
//$mahasiswa = query("SELECT * FROM mahasiswa LIMIT 2,3"); //jika parameternya 2, yang pertama data mulai, yang kedua jumlah data yang ditampilkan 

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
// mengetahui jumlah data

// cara 1
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result);
// var_dump($jumlahData);

// cara 2 : menggunakan function query yang telah dibuat dan tambah function count untuk menghitung jumlah elemen pada array
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

// cek halaman aktif
// menggunakan if
// if(isset($_GET["halaman"])){
//   $halamanAktif = $_GET["halaman"];
// }else{
//   $halamanAktif = 1;
// }

// menggunakan operator ternari
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

// buat awal data untuk menampilkan data pertama yang akan ditampilkan
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman; 


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData,$jumlahDataPerHalaman");


// ketika tombol cari ditekan
if(isset($_POST["cari"])){
  $mahasiswa = cari($_POST["keyword"]);
}
  // ambil data (fetch) mahasiswa dari object result menggunakan :
  // mysqli_fetch_row()
  // mysqli_fetch_assoc()
  // mysqli_fetch_array()
  // mysqli_fetch_object()

  // $mhs = mysqli_fetch_row($result);
  // var_dump($mhs);

  // $mhs = mysqli_fetch_assoc($result);
  // var_dump($mhs);

  // $mhs = mysqli_fetch_array($result);
  // var_dump($mhs);

  // $mhs = mysqli_fetch_object($result);
  // var_dump($mhs->nama);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
  </head>
  <body>
    <a href="logout.php">Log Out</a>
    
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
      <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian ...." autocomplete="off">
      <button type="submit" name="cari">Cari</button>
    </form>
    <br>

    <?php if($halamanAktif > 1) : ?>
      <a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1 ; $i <=$jumlahHalaman; $i++) :  ?>
      <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight : bold; color: red;"><?= $i; ?></a>
      <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
      <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
      <a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
    <?php endif; ?>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
      </tr>
      <?php $i = 1 ?>
      <?php foreach($mahasiswa as $row) : ?>
      <tr>
        <td><?= $i ?></td>
        <td>
          <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a>
          <a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('yakin');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" width="50" /></td>
        <td><?= $row["nrp"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
      </tr>
      <?php $i++; ?>
      <?php endforeach; ?>
    </table>
  </body>
</html>
