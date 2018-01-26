<?php
$host = "localhost";
$db   = "php_8";
$user = "root";
$password = "";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $password, $options);

$stmt = $pdo->query("SELECT * FROM pages", PDO::FETCH_ASSOC);

$res = $stmt->fetchAll();


echo "<ul>";
foreach($res as $pages) {
    echo "<li><a href='/" . $pages['title'] . ".php'>" . $pages['title'] . "</a></li>";
}
echo "</ul>";