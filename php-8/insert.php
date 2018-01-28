<?php session_start();

require_once "db.php";

$title = $_POST['title'];
$description = $_POST['description'];
$status = $_POST['status'];

$_SESSION['title'] = $title;
$_SESSION['description'] = $description;
$_SESSION['status'] = $status;

if(!$title || !$description) {
    $_SESSION['error'] = "Заполните все поля";
    header("Location: index.php");
    exit();
}

$stmt = $pdo->prepare("INSERT INTO `pages` (`title`, `description`, `status`) VALUES (:title, :description, :status)");

$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);
$stmt->bindValue(':status', $status, PDO::PARAM_STR);

$result = $stmt->execute();

if ($result) {
    $_SESSION['good'] = "Запись добавлена";
    unset($_SESSION['error']);
    unset($_SESSION['title']);
    unset($_SESSION['description']);
    unset($_SESSION['status']);
} else {
    $_SESSION['error'] = "Не удалось добавить запись";
}


header("Location: index.php");