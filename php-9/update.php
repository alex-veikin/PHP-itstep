<?php session_start();

require_once "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$status = $_POST['status'];

$_SESSION['id'] = $title;
$_SESSION['title'] = $title;
$_SESSION['description'] = $description;
$_SESSION['status'] = $status;

if(!$title || !$description) {
    $_SESSION['error'] = "Заполните все поля";
    header("Location: index.php?id=" . $_POST['id']);
    exit();
}

$stmt = $pdo->prepare("UPDATE `pages`
          SET `title` = :title, `description` = :description, `status` = $status
          WHERE `id` = $id");

$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':description', $description, PDO::PARAM_STR);

$result = $stmt->execute();

if ($result) {
    $_SESSION['good'] = "Запись изменена";
    unset($_SESSION['error']);
    unset($_SESSION['title']);
    unset($_SESSION['description']);
    unset($_SESSION['status']);
} else {
    $_SESSION['error'] = "Не удалось изменить запись";
}


header("Location: index.php");