<?php

$host = "localhost";
$database = "php_7";
$user = "root";
$password = "";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$database;charset=$charset";
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
);

$pdo = new PDO($dsn, $user, $password, $options);

//$stmt = $pdo->prepare('SELECT * FROM pages WHERE id= :id');

//1
//$stmt->execute(['id'=>$id]);

//2
//$stmt->bindValue(':id', $id, PDO::PARAM_INT);
//$stmt->execute();

//3
//$stmt->bindParam(':id', $id, PDO::PARAM_INT);
//$stmt->execute();

$stmt = $pdo->query('SELECT * FROM pages WHERE id', PDO::FETCH_ASSOC);

$res = $stmt->fetchAll();

echo "<ul>";
foreach($res as $pages) {
    echo "<li><a href='/" . $pages['title'] . ".php'>" . $pages['title'] . "</a></li>";
}
echo "</ul>";