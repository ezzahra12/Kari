<?php

class Database{
    private static $host="localhost";
    private static $db="Kari";
    private static $user="root";
    private static $pass="root";
    private static $pdo=null;

    public static function getConnection(){
        if (self::$pdo === null) {
            self::$pdo = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$db . ";charset=utf8",
                self::$user,
                self::$pass,
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        }
        return self::$pdo;
    }
}

?>