<?php

if (!isset($_POST['submit'])) {
    header("Location: index.php");
    exit();
}

$error = [];
$login = "";
$password = "";


if (!empty($_POST["login"])) {
    $login = $_POST["login"];
} else {
    $error[] = "Enter your name";
}

if (!empty($_POST["password"])) {
    $password = ($_POST["password"]);
} else {
    $error[] = "Enter password";
}


if ($login && $password) {
    $file = fopen("users.txt", "a+");
    fwrite($file, "$login : $password".PHP_EOL);
    fclose($file);

    echo "User registered";
} else {
    foreach ($error as $msg) echo "<p style='color:red'>$msg</p>";
}

echo "<br>";
echo "<br>";
echo "<a href='index.php'>Back</a>";

//sleep(6);
//header("Location: index.php");

