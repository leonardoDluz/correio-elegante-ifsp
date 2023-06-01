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
            payment_status,
            type
        ) VALUES (
            :content,
            :name,
            :course,
            :grade,
            :payment_status,
            :type
        );';

        $statement = $this->connection->prepare($sql);
        $statement->bindValue(':content', $mensage->content);
        $statement->bindValue(':name', $mensage->student->name);
        $statement->bindValue(':course', $mensage->student->course);
        $statement->bindValue(':grade', $mensage->student->grade);
        $statement->bindValue(':payment_status', $mensage->paymentStatus);
        $statement->bindValue(':type', $mensage->type);


        $resul = $statement->execute();

        return $resul;
    }

    public function all(): array
    {
        $mensageList = $this->connection
            ->query('SELECT * FROM mensages ORDER BY id DESC;')
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

    public function updatePaymentStatus(array $paymentsPaid): void
    {
        foreach ($paymentsPaid as $paymentPaid) {
            $sql = "UPDATE mensages SET payment_status='pago' WHERE `id`=?;";
    
            $statement = $this->connection->prepare($sql);
            $statement->bindValue(1, $paymentPaid);
            $statement->execute();
        }
    }
}