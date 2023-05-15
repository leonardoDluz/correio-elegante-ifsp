<?php

namespace Ifsp\CorreioElegante\Controller;

class MensageFormController implements Controller
{
    public function processRequest(): void
    {
        require_once __DIR__ . '/../../pages/mensage.php';
    }
}