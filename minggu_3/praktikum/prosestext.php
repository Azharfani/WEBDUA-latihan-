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
    if (isset($_POST['Input'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];
    $nama4 = $_POST['nama4'];
    echo "<b>Nama Anggota kelompok 1:</b> <br>";
    echo $nama1. "<br>";
    echo $nama2. "<br>";
    echo $nama3. "<br>";
    echo $nama4. "<br>";
    }   
    ?>
</body>
</html>