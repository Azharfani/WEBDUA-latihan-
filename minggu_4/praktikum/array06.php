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
    $arrNilai = array ("Ani" => 80, "Otim" => 90, "Sri" => 75,
    "Budi" => 85);
    echo "<b>Array sebelum pengurutan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    sort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan sort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    rsort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah pengurutan dengan rsort()</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
    ?>
</body>
</html>