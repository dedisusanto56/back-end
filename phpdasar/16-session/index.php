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
$mahasiswa = query("SELECT * FROM mahasiswa");

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
