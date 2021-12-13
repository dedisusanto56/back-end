<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar"); 

// ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
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
      <?php while($row = mysqli_fetch_assoc($result)) : ?>
      <tr>
        <td>1</td>
        <td>
          <a href="">ubah</a>
          <a href="">hapus</a>
        </td>
        <td><img src="img/1.jpg" width="50" /></td>
        <td>123456789</td>
        <td>sandhika galih</td>
        <td>sandhikagalih@unpas.ac.id</td>
        <td>teknik informatika</td>
      </tr>
      <?php endwhile; ?>
    </table>
  </body>
</html>
