<?php

namespace Ifsp\CorreioElegante\Controller;

use DateTime;
use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;
use InvalidArgumentException;

class MensagesCenterController implements Controller
{
    public function __construct(private MensageRepository $mensageRepository)
    {
    }

    public function processRequest(): void
    {
        if (!array_key_exists('logged', $_SESSION)) {
            header('Location: /login');
            return;
        }

        $mensageList = $this->mensageRepository->all();
        require_once __DIR__ . '/../../pages/mensages-center.php';
    }
}