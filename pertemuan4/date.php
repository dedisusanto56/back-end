<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <!-- built-in function -->
    <!-- date : untuk menampilkan tanggal dengan format tertentu -->
    <?= date('l') ?>
    <br>
    <?= date('d') ?>
    <br>
    <?= date('D') ?>
    <br>
    <?= date('m') ?>
    <br>
    <?= date('M') ?>
    <br>
    <?= date('y') ?>
    <br>
    <?= date('Y') ?>
    <br>
    <?= date('l, d-M-Y') ?>
    <br>


    <!-- time : UNIX Timetamp / EPOCH Time / waktu yang terus berjalan semenjak komputer ditemukan, yaitu sejak 1 januari 1970 -->
    <?= time() ?>
    <br>
    <!-- menampilkan hari di dua hari kedepan -->
    <!-- 2 hari = 172800 detik -->
    <?= date('l', time()+172800) ?>
    <br>
    <!-- atau -->
    <?= date('l', time()+(60*60*24*2)) ?>
    <br>
    <!-- menampilkan hari di dua hari kebelakang -->
    <?= date('d-M-Y', time()-(60*60*24*2)) ?>
    <br>

    <!-- mktime (make time)
    membuat sendiri detik
    mktime(0,0,0,0,0,0)
    jam, menit, detik, bulan, tanggal, tahun -->

    <?= mktime(0,0,0,8,25,1985) // detik yang berlalu sejak tanggal diset?>
    <br>
    <?= date ("l", mktime(0,0,0,8,25,1985)) ?>
    <br>

    <!-- strtotime 
    lama waktu dari EPOCH time sampai tanggal yang ditentukan -->
    <?= strtotime("25 aug 1985"); ?>
    <br>
    <!-- mencari tahu hari dari tanggal lahir -->
    <?= date('l', strtotime("18 jul 1993")) ?>
    <br>
    <!-- -------------------------------------------------- -->
    <!-- User Defined Function -->
    <?php 
        function salam($waktu, $name){
            return "selamat $waktu, $name";
        }
    ?>

    <?= salam("pagi", "dedi"); ?>

</body>
</html>