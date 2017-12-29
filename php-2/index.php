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

function arrayToStrings($arr) {
    foreach ($arr as $str) {
        echo "<p>$str</p>\n";
    }
}


$arrStr = ["This some text", "DFklasfdkda dslkfk dslfksd", "Ksdkfsdf dfs sdfsfd sdf"];
arrayToStrings($arrStr);

echo "<br>";



function math($arrNum, $op) {
    $res = 0;
    foreach ($arrNum as $num) {
        switch ($op) {
            case "+":
                $res += $num;
                break;
            case "-":
                $res -= $num;
                break;
            case "*":
                $res *= $num;
                break;
            case "/":
                $res /= $num;
                break;
        }
    }
    echo "<p>$res</p>";
}

math([2, 3, 5], "-");

echo "<br>";




function math2($op, ...$args) {
    $res = 0;
    foreach ($args as $num) {
        switch ($op) {
            case "+":
                $res += $num;
                break;
            case "-":
                $res -= $num;
                break;
            case "*":
                $res *= $num;
                break;
            case "/":
                $res /= $num;
                break;
        }
    }
    echo "<p>$res</p>";
}

math2("+", 2, 5, 6);

echo "<br>";




function table($a, $b) {
    $res = "<table>";
    for ($i = 1; $i <= $b; $i++) {
        $res .= "<tr>";
        for ($j = 1; $j <= $a; $j++) {
            if ($i == 1 || $j == 1) {
                $res .= "<th>" . ($j * $i) . "</th>";
            } else {
                $res .= "<td>" . ($j * $i) . "</td>";
            }
        }
        $res .= "</tr>";
    }
    $res .= "</table>";
    echo $res;
}

table(4, 3);


?>




<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>

</html>
