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
    // latihan menggunakan loop dengan for dan while
    $n =1;
    while ($n <= 5) {
	for ($n2 = 1; $n2 <= $n; $n2++) {
		echo $n;
	}
	echo '<br/>';
	$n++;
    }
    $n = 5;
    ?>
</body>
</html>