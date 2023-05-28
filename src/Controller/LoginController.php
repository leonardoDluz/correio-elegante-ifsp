<?php

namespace Ifsp\CorreioElegante\Controller;

use Ifsp\CorreioElegante\Infrastructure\Repository\UserRepository;

class LoginController implements Controller
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function processRequest(): void
    {
        $userName = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        $userData = $this->userRepository->getUser($userName);

        $correctPassword = password_verify($password, $userData['password'] ?? '');

        session_start();
        if($correctPassword) {
            $_SESSION['logged'] = true;
            header('Location:/central-mensagens');
        } else {
            header('Location:/login?sucesso=0');
        }
    }
}