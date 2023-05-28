<?php

namespace Ifsp\CorreioElegante\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    private static string $host;
    private static string $dbName;
    private static string $user;
    private static string $password;


    public static function createConnection(): PDO
    {
        require_once __DIR__ . '/../../../config/config-database.php';

        $connection = new PDO(
            'mysql:host=' . self::$host . ';dbname=' . self::$dbName, 
            self::$user, 
            self::$password
        );

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }

    public static function setHost(string $host): void
    {
        self::$host = $host;
    }

    public static function setDbName(string $dbName): void
    {
        self::$dbName = $dbName;
    }

    public static function setUser(string $user): void
    {
        self::$user = $user;
    }

    public static function setPassword(string $password): void
    {
        self::$password = $password;
    }
}