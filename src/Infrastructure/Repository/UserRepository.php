<?php

namespace Ifsp\CorreioElegante\Infrastructure\Repository;

use Ifsp\CorreioElegante\Entity\User;
use PDO;

class UserRepository
{
    public function __construct(private PDO $connection)
    {
    }

    public function getUser(string $userName): array
    {
        $sql = 'SELECT * FROM users WHERE user_name = ?;';

        $statement = $this->connection->prepare($sql);
        $statement->bindValue(1, $userName);
        $statement->execute();

        $resul = $statement->fetch();

        return $resul;
    }
}