<?php

$name = $_POST['name'];
$age = $_POST['age'];
//var_dump($_POST['name']);

if ($_POST['reset']) {
    header("Location: /index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="#" method="post">
    <?php if (!$name || !$age) : ?>
        <input type="text" name="name" placeholder="Введите Ваше имя">
        <input type="number" name="age" placeholder="Введите Ваш возраст">
        <input type="submit" value="Нажать">
    <?php else : ?>
        <span><?php echo "Name: " . $name . ", age: " . $age; ?></span>
        <input type="submit" name="reset" value="Сброс">
    <?php endif; ?>
</form>

<?php

//$a = 6;
//$b = 4;
//
//echo $a + $b;
//echo "<br>";
//echo $a - $b;
//echo "<br>";
//echo $a * $b;
//echo "<br>";
//echo $a / $b;
//echo "<br>";
//echo $a % $b;
//echo "<br>";
//echo $a ** $b;
//echo "<br>";
//
//
//$c = 25;
//$d = 70;
//$e = 100;
//
//if (($c > 26 && $c < $d) || ($c === 25 && $d === 70 && $e === 100)) {
//    echo "Ok";
//}

//$arr = ["apple", "banana", "lemon"];
//
//foreach ($arr as $k => $v) {
//    echo $k + 1 . ": " . $v . "<br/>";
//}



?>


</body>
</html>