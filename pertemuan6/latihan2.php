<?php 
$mahasiswa = [
    [
        "nama" => "sandhika galih",
        "nrp" => "123456789",
        "email" => "sandhikagalih@gmail.com",
        "jurusan" => "teknik informatika"
    ],
    [
        "nama" => "doddy ferdiansyah",
        "nrp" => "987654321",
        "email" => "doddy@gmail.com",
        "jurusan" => "teknik mesin"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <!-- menampilkan array assosiative -->
    <?= $mahasiswa[0]["jurusan"] ?>
</body>
</html>