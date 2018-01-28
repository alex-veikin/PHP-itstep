<?php

$host = "localhost";
$database = "php_7";
$user = "root";
$password = "";
$charset = "utf8";

$db = new mysqli();
$db->connect($host, $user, $password, $database);
$db->set_charset("utf8");

if (!$db) echo "Не удалось подключиться к базе <br><br>";
else echo "Успешное подключение <br><br>";


$sql = "SELECT * FROM pages";
$data = $db->query($sql);

echo "<ul>";
while($pages = $data->fetch_assoc()) {
    echo "<li>";
    echo "<a href='/" . $pages['title'] . ".php'>" . $pages['title'] . "</a>";
    echo "</li>";
}
echo "</ul>";