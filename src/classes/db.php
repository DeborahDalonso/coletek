<?php

class DB
{
    private static $pdo = null;

    public static function getConnection()
    {
        if (self::$pdo === null) {
            $config = require '../config/db.php';

            $host = $config['host'];
            $dbname = $config['dbname'];
            $username = $config['username'];
            $password = $config['password'];

            try {
                self::$pdo = new \PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Erro de conexão com o banco de dados: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
