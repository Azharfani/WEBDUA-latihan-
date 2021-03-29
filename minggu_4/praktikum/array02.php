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
    $arrNilai = array ("Ani" => 80, "Otim" => 90, "Ana" => 75, "Budi"
    => 85);
    echo $arrNilai['Ani']; //80
    echo $arrNilai['Otim']; //90
    $arrNilai = array();
    $arrNilai['Ami'] = 80;
    $arrNilai['Asma'] = 95;
    $arrNilai['Sri'] = 77;
    echo $arrNilai['Asma']; //95
    echo $arrNilai['Ami']; //80
    ?>
</body>
</html>