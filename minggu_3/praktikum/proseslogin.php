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
        if (isset($_POST['Login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if ($user == "achmatim" && $pass == "123") {
        echo "<h2>Login Berhasil</h2>";
        } else {
        echo "<h2>Login Gagal</h2>";
        }
        }
    ?>
</body>
</html>