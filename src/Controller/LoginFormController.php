<?php

namespace Ifsp\CorreioElegante\Controller;

class LoginFormController implements Controller
{
    public function processRequest(): void
    {
        require_once __DIR__ . '/../../pages/login-form.php';
    }
}