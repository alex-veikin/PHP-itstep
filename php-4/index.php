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

<?php
//Lesson 4

$error = [];
$name = "";
$age = "";

if (isset($_POST["submit"])) {
    if (!empty($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $error[] = "Empty name";
    }

    if (!empty($_POST["age"])) {
        $age = $_POST["age"];
    } else {
        $error[] = "Empty age";
    }
}

$birth = date("Y") - $age - 1;

$name = ucfirst($name);

if ($name && $age) {
    echo "Your name is $name<br>\n";
    echo "You were born in $birth";
} else {
    foreach ($error as $msg) echo "<p style='color:red'>$msg</p>";
}

?>

<form action="#" method="post">
    <input name="name" type="text" placeholder="enter your name" value="<?= $_POST["name"] ?>">
    <!--    <input name="age" type="number" placeholder="enter your age" value="--><? //= $_POST["age"] ?><!--">-->
    Enter your age:
    <select name="age" title="Your age">
        <option value=''>Select</option>
        <?php for ($i = 10; $i < 70; $i++) : ?>
            <option <?=($i == $_POST['age']) ? 'selected' : ''?> value='<?=$i?>'>
                <?=$i?>
            </option>
        <? endfor; ?>
    </select>
    <input name="submit" type="submit" value="Get your year of birth">
</form>


<script src="js/jquery-3.2.1.js"></script>
<script src="js/main.js"></script>
</body>

</html>
