<?php
//header('Content-type:text/plain;charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php
//Lesson 3

//Создать переменную, которая будет хранить значение 25.
//Взять от него синус. Результат возвести во вторую степень, используя мат. Функцию.
//Результат округлить и вывести на экран.
$num = 25;

echo round(pow(sin($num), 2), 3) . "<br><br>";



//Создать переменную, в которую предположительно будет помещен произвольный логин.
//Вывести на экран длину строки.
//Также вывести на экран первые 3 символа логина.
$login = "alex85";

echo mb_strlen($login) . "<br>";
echo mb_substr($login, 0, 3) . "<br><br>";



//Создать переменную с произвольным текстом (длиной >10символов).
//Провести проверку: если длина строки больше 10 символов,
//обрезать строку до 10 символов. С помощью функции заменить все символы "a-g" на пустоту.
$text = "Some long text";
$text = (mb_strlen($text) > 10) ? mb_substr($text, 0 , 10) : $text;
$text = preg_replace("/[a-g]/", "", $text);

echo $text . "<br><br>";



//htmlspecialchars
$html = "<div class='refnamediv'>
<h1>htmlspecialchars</h1>
<p> (PHP 4, PHP 5, PHP 7)</p>
<p class='refpurpose'>
<span class='refname'>htmlspecialchars</span>
<span class='dc-title'>Любой текст</span></p></div>";


echo mb_strlen($html) . "<br>";
//$html = htmlspecialchars($html, ENT_QUOTES, "utf-8");
//echo mb_strlen($html) . "<br>";
$html = strip_tags($html);
echo mb_strlen($html) . "<br>";
echo $html;
echo "<br><br>";

?>




<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>

</html>
