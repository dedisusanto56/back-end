<?php 
$nama = "dedi";
$nama2 = "susanto";
$x = 10;
$y = 2;
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
    <!-- standart output
    echo, print
    print_r
    var_dump -->

    <?php
    echo 'jengkol<br>';
    echo 123 ;
    echo '<br>';
    echo true;
    echo false;// bukan menampilkan 0, tapi kosong
    ?>
    <br>
    <br>
    <?php 
    print 'jengkol<br>';
    print 123;
    print '<br>';
    print true;
    print false;
    ?>
    <br>
    <br>
    <?php 
    print_r("jengkol<br>");
    print_r(123);
    print_r('<br>');
    print_r(true);
    print_r(false);
     ?>

    <?php 
    var_dump("jengkolan"); 
    var_dump(123);
    var_dump(true);
    var_dump(false);
    ?>
    <br>
    <br>

    <h1><?php echo "jengkolan"; ?></h1>
    <?php echo "<h1>selamat datang jengkol</h1>" ?>

    <?= 'selamat datang $nama' ?>

    <!-- penggabung string (.) -->
    <?= $nama . " " . $nama2; ?>

    <br>
    <br>
    
    <!-- aritmatika -->
    <!-- +, -, *, /, % -->
    <?= $x + $y ?>
    <?= $x - $y ?>
    <?= $x/$y ?>
    <?= $x * $y ?>
    <?= $x % $y ?>

    <br>
    <br>

    <!-- assignment -->
    <!-- =, +=, -=, *=, /=, .= -->
    <?php 
    $x = 1;
    $x -= 5;
    echo $x;
    echo '<br>';
    $nama = "dedi" ;
    $nama .= " susanto";
    echo $nama;
    ?>

    <br>
    <br>

    <!-- perbandingan -->
    <!-- <, >, <=, >=, ==, != -->
    <?php 
    var_dump (1<5);
    var_dump(5<=5);
    var_dump(4<2);
    var_dump(5=='5') ?>

    <br>
    <br>

    <!-- identitas -->
    <!-- ===, !== -->
    <?php 
    var_dump(1==='1');
    var_dump(1!=='1');
    ?>

    <br>
    <br>

    <!-- logika -->
    <!-- &&, ||, ! -->
    <?php 
    $x = 10;
    var_dump($x < 15 && $x%2==0);
    ?>
</body>
</html>