<?php 
$mahasiswa = ["shandika galih", "123456789", "teknik informatika", "email"];
$mahasiswa2 = [["shandika galih", "123456789", "teknik informatika", "email"], ["doddy", "987654321", "teknik mesin", "gmail"], ["erik", "091287346", "teknik bubut", "hotmail"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- menggunakan for each -->
    <ul>
    <?php foreach($mahasiswa as $m) : ?>
        <li><?= $m ?></li>
    <?php endforeach; ?>
    </ul>

    <!-- menggunakan echo -->
    <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul>

    <!-- array multi dimensi -->
    <?php foreach($mahasiswa2 as $m2) : ?>
        <ul>
        <li>Nama : <?= $m2[0]; ?></li>
        <li>NRP : <?= $m2[1]; ?></li>
        <li>Jurusan : <?= $m2[2]; ?></li>
        <li>Email : <?= $m2[3]; ?></li>
        </ul>
    <?php endforeach; ?>

    <!-- atau -->
    <?php foreach($mahasiswa2 as $m2) : ?>
        <ul>
        <?php foreach($m2 as $m) : ?>
            <li><?= $m ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>