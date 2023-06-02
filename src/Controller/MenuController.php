<?php

namespace Ifsp\CorreioElegante\Controller;

class MenuController implements Controller
{
    public function processRequest(): void
    {
        require_once __DIR__ . '/../../pages/menu.php';
    }
}