<?php

class Db
{
    private static $host = "localhost";
    private static $db = "itstep_users";
    private static $user = "root";
    private static $password = "";

    public static function connect() {
        $charset = "utf8";
        $dsn = "mysql:host=".self::$host.";dbname=".self::$db.";charset=".$charset;
        $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        return new PDO($dsn, self::$user, self::$password, $options);
    }
}

