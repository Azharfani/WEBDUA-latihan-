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
        if (isset($_POST['Pilih'])) {
        $film = $_POST['kartun'];
        echo "Film Kartun Favorit Anda adalah :
        <font color=blue><b>$film</b></font>";
        }
    ?>
</body>
</html>