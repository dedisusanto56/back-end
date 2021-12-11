<?php 
$angka = [12, 34, 45, 56, 65, 99, 10, 11]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin : 3px;
            float: left;
        }
        .clear {clear : both}

    </style>
    <title>Array</title>
</head>
<body>
    <!-- menggunakan for -->
    <?php for($i = 0; $i <count($angka) ; $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>
    <div class="clear"></div>

    <!-- menggunakan foreach -->
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>