<?php

namespace Ifsp\CorreioElegante\Infrastructure\Repository;

use Ifsp\CorreioElegante\Entity\Mensage;
use Ifsp\CorreioElegante\Entity\Student;
use PDO;

class MensageRepository
{
    public function __construct(private PDO $connection)
    {
    }

    public function add(Mensage $mensage): bool
    {
        $sql = 'INSERT INTO mensages (
            content,
            name,
            course,
            grade,
            payment_status
        ) VALUES (
            :content,
            :name,
            :course,
            :grade,
            :payment_status
        );';

        $statement = $this->connection->prepare($sql);
        $statement->bindValue(':content', $mensage->content);
        $statement->bindValue(':name', $mensage->student->name);
        $statement->bindValue(':course', $mensage->student->course);
        $statement->bindValue(':grade', $mensage->student->grade);
        $statement->bindValue(':payment_status', $mensage->paymentStatus);


        $resul = $statement->execute();

        return $resul;
    }

    public function all(): array
    {
        $mensageList = $this->connection
            ->query('SELECT * FROM mensages;')
            ->fetchAll();
        return $mensageList;
    }

    public function GetLastId(): int
    {
        $lastId = $this->connection
            ->query('SELECT MAX(id) as id FROM mensages;')
            ->fetch();
        return $lastId['id'];
    }
}