<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arrWarna = array ("Blue","Black","Red","Yellow","Green");
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrWarna); $i++) {
    echo "Do you like <font color=$arrWarna[$i]>". $arrWarna[$i]
    ."</font> ?<br>";
    }
    echo "<br>Menampilkan isi array dengan foreach : <br>";
    foreach ($arrWarna as $warna) {
    echo "Do you like <font color=$warna>". $warna ."</font>
    ?<br>";
    }
    ?>
</body>
</html>