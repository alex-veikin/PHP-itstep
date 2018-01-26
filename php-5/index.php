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

<form action="register.php" method="post">
    <input name="login" type="text" placeholder="enter your login" value="">
    <input name="password" type="password" placeholder="enter your password" value="">
    <input name="submit" type="submit" value="Save">
</form>


<?php

$file = fopen("users.txt", "r");


?>

<form action="">
    <label for="users"></label>
    <select name="" id="users">
        <?php

        while (!feof($file)) {
            echo "<option value=''>" . fgets($file) . "</option>";
        }

        ?>
    </select>
</form>

<?php

fclose($file);

?>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>

</html>
