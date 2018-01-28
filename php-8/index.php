<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/main.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

        <?php

        require_once "db.php";


        $stmt = $pdo->query("SELECT * FROM pages");

        $res = $stmt->fetchAll();

        echo "<ul class='center'>";
        foreach ($res as $pages) {
            echo "<li>" .
                "<form class='list' action='delete.php' method='post'>" .
                "<button class='delete' type='submit' name='id' value='" . $pages['id'] . "'><i class=\"fa fa-trash\" aria-hidden=\"true\"></i></button>" .
                "</form>" .
                "<form class='list' action='update.php' method='post'>" .
                "<button type='submit' name='id' value='" . $pages['id'] . "'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>" .
                "</form>" .
                "<a href='index.php?id=" . $pages['id'] . "'>ID: " . $pages['id'] . ", Title: " . $pages['title'] . ", Description: "
                . $pages['description'] . " Status: " . $pages['status'] . "</a>" .
                "</li>";
        }
        echo "</ul>";

        $title = false;
        $description = false;
        $status = false;

        if ($_GET['id']) {
            session_unset();
            foreach ($res as $pages) {
                if ($pages['id'] == $_GET['id']) {
                    $title = $pages['title'];
                    $description = $pages['description'];
                    $status = $pages['status'];
                }
            }
        }

        ?>


        <form class="reg-form" action="<?= ($_GET['id']) ? "update.php" : "insert.php" ?>" method="post">
            <div class="form-group">
                <?php if ($_GET['id']): ?>
                    <input type="text" name="id" value="<?= $_GET['id'] ?>" hidden>
                <?php endif; ?>
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                       placeholder="Enter title" value="<?= $_SESSION['title'] ?? $title ?>">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"
                          placeholder="Description"><?= $_SESSION['description'] ?? $description ?></textarea>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="status" id="status" value="0" hidden checked>
                <input type="checkbox" class="form-check-input" name="status" id="status" value="1"
                    <?= ($_SESSION['status'] ?? $status) ? "checked" : "" ?>>
                <label class="form-check-label" for="status">Publish?</label>
            </div>

            <ul>
                <?php
                if (count($_SESSION['error'])) {
                    echo "<li class='error'>" . $_SESSION['error'] . "</li>";
                } else if (count($_SESSION['error'])) {
                    echo "<li class='good'>" . $_SESSION['good'] . "</li>";
                    session_unset();
                }
                ?>
            </ul>
            <button type="submit" class="btn btn-primary"><?= ($_GET['id']) ? "Update page" : "Add new page" ?></button>
            <?php if ($_GET['id']) : ?>
            <button class="btn btn-primary"><a href="index.php">Cancel</a></button>
            <?php endif; ?>
        </form>

</div>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>

</html>
