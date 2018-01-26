<?php session_start();

require_once "db.php";

$id = $_POST['id'];
if(!$id) {
    header("Location: index.php");
    exit;
}

$stmt = $pdo->query("DELETE FROM `pages` WHERE `id` = $id");
$result = $stmt->execute();

if ($result) {
    $_SESSION['good'] = "Запись удалена";
} else {
    $_SESSION['error'] = "Не удалось удалить запись";
}


header("Location: index.php");