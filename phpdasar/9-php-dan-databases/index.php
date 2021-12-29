<?php 
// menghubungkan ke function.php
require 'function.php';
// atua
// include "function.php";

// ambil data dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <h1>Daftar Mahasiswa</h1>
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
          <a href="">ubah</a>
          <a href="">hapus</a>
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