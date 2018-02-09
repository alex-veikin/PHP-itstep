<?php

class Db {
    private static $host = "localhost";
    private static $db = "itstep_lesson10";
    private static $user = "root";
    private static $password = "";

    public static function connect() {
        $charset = "utf8";
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ];
        $dsn = "mysql:host=".self::$host.";dbname=".self::$db.";charset=".$charset;

        return new PDO($dsn, self::$user, self::$password, $options);
    }

    public static function queryOne($stmt) {
        $db = self::connect();
        return $db->query($stmt)->fetch();
    }

    public static function queryAll($stmt) {
        $db = self::connect();
        return $db->query($stmt)->fetchAll();
    }

    public static function exec($stmt) {
        $db = self::connect();
        return $db->exec($stmt);
    }
}

