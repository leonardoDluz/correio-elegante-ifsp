<?php

namespace Ifsp\CorreioElegante\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        // $connection = new PDO('mysql:host=localhost;dbname=correio_elegante', 'root', 'Intel@2022');
        $dbPath = __DIR__ . '/../../../banco.sqlite';
        $connection = new PDO("sqlite:$dbPath");

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
    }
}