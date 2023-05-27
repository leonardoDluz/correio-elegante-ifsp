<?php

namespace Ifsp\CorreioElegante\Controller;

use Ifsp\CorreioElegante\Entity\Mensage;
use Ifsp\CorreioElegante\Entity\Student;
use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;

class MensageController implements Controller
{
    public function __construct(private MensageRepository $mensageRepository)
    {
    }

    public function processRequest(): void
    {
        $content = filter_input(INPUT_POST, 'mensagem');
        $name = filter_input(INPUT_POST, 'nome');
        $course = filter_input(INPUT_POST, 'curso');
        $grade = filter_input(INPUT_POST, 'serie');
        $paid = 'aberto';

        if ($content === false || $name === false || $course === false || $grade === false) {
            header('Location: /?sucesso=0');
            return;
        }

        $sucess = $this->mensageRepository->add(
            new Mensage(
                new Student(
                    $name,
                    $grade,
                    $course
                ),
                $content,
                $paid
            )
        );

        if ($sucess === false) {
            header('Location: /?sucesso=0');
            return;
        } 
        header('Location: /pagamento');
    }
}