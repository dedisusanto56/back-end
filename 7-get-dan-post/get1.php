<?php 
$mahasiswa = [
    [
        "nama" => "sandhika galih",
        "nrp" => "123456789",
        "email" => "sandhikagalih@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "doddy ferdiansyah",
        "nrp" => "987654321",
        "email" => "doddy@gmail.com",
        "jurusan" => "teknik mesin",
        "gambar" => "2.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        
            <li>
                <a 
                    href="get2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?>
                </a>
            </li>
        
    <?php endforeach; ?>
    </ul>
</body>
</html>