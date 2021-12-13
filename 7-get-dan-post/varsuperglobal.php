<?php 
$x = 20; //ini adalah variabel global

function tampilX(){
    global $x; //untuk mengakses variabel di luar function
    echo $x; //ini adalah variabel local function
}

tampilX();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get dan post`</title>
</head>
<body>
    <?php 
        echo "isi \$_GET";
        echo "<br>";
        echo "<br>";
        var_dump($_GET);
        echo "<br>";
        echo "<br>";
        echo "isi \$_POST";
        echo "<br>";
        echo "<br>";
        var_dump($_POST);
        echo "<br>";
        echo "<br>";
        echo "isi \$_REQUEST";
        echo "<br>";
        echo "<br>";
        var_dump($_REQUEST);
        echo "<br>";
        echo "<br>";
        echo "isi \$_SESSION";
        echo "<br>";
        echo "<br>";
        var_dump($_SESSION);
        echo "<br>";
        echo "<br>";
        echo "isi \$_COOKIE";
        echo "<br>";
        echo "<br>";
        var_dump($_COOKIE);
        echo "<br>";
        echo "<br>";
        echo "isi \$_SERVER";
        echo "<br>";
        echo "<br>";
        var_dump($_SERVER);
        echo "<br>";
        echo "<br>";
        echo "isi \$_ENV";
        echo "<br>";
        echo "<br>";
        var_dump($_ENV);
        echo "<br>";
        echo "<br>";
     ?>    

     <?php 
     
     ?>
</body>
</html>

<?php 
// mengisi nilai variabel super global $_GET
$_GET["nama"] = "shandika galih";
$_GET["nrp"] = "123456789";

var_dump($_GET);

?>