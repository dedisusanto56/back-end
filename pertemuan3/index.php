<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .warna-baris{
            background-color: grey;
        }
    </style>
    <title>control flow</title>
</head>
<body>
    <!-- for -->
    <?php 
    for ($i=0; $i < 5; $i++) { 
        echo "jengkol<br>";
    }
    ?>
    
    <br>

    <!-- while -->
    <?php 
    $i = 0;
    while ($i<5) {
        echo "jengkol<br>";
        $i++;
    }
    ?>

    <br>

    <!-- do while -->
    <?php 
    $i = 0;
    do {
        echo "jengkol<br>";
        $i++;
    } while ($i < 5);
    ?>

    <br>
    <!-- looping di table -->
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- gaya penulisan biasa -->
        <?php 
        for ($i=1; $i <= 3; $i++) { 
            echo "<tr>";
            for ($j=1; $j <= 5; $j++) { 
                echo "<td> $i,$j </td>";
            }
            echo "</tr>";
        }
        ?>

        <!-- gaya penulisan templating -->
        <?php for ($i=1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j=1; $j <= 5; $j++) : ?>
                    <td><?= "$i,$j" ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <!-- percabangan -->
    <?php 
    $x = 20;
    if($x<30){
        echo "benar";
    }else if($x === 20){//bisa juga elseif tanpa spasi
        echo "sama";
    }else{
        echo "salah";
    }
    ?>

    <table border="1" cellpadding="10" cellspasing="0">
        <?php for ($i=1; $i <= 5; $i++) :?>
            <?php if($i % 2 === 1) : ?>
                <tr class = "warna-baris">
            <?php else : ?>
                <tr>
            <?php endif ?>
                <?php for ($j=1; $j <= 5; $j++) :?>
                    <td><?= "$i,$j" ?></td>
                <?php endfor ?>
                </tr>
        <?php endfor?>

    </table>
</body>
</html>