<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get dan post</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li>nama : <?= $_GET["nama"]; ?></li>
        <li>nrp : <?= $_GET["nrp"]; ?></li>
        <li>email : <?= $_GET["email"] ?></li>
        <li>jurusan : <?= $_GET["jurusan"] ?></li>
    </ul>
    <a href="studikasus.php">kembali ke data mahasiswa</a>
    
</body>
</html>