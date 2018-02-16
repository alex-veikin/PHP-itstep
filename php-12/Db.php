<?php

class Db
{
    private static $host = "localhost";
    private static $db = "itstep_users";
    private static $user = "root";
    private static $password = "";

    public static $pdo;

    public static function connect() {
        if(!self::$pdo) {
            $charset = "utf8";
            $dsn = "mysql:host=".self::$host.";dbname=".self::$db.";charset=".$charset;
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

            self::$pdo = new PDO($dsn, self::$user, self::$password, $options);
        }

        return self::$pdo;
    }
}

