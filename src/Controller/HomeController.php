<?php

namespace Ifsp\CorreioElegante\Controller;

class HomeController implements Controller
{
    public function processRequest(): void
    {
        require_once __DIR__ . '/../../pages/home.php';
    }
}