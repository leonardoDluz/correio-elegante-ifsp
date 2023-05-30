<?php

return [
    'GET|/' => \Ifsp\CorreioElegante\Controller\HomeController::class,
    'GET|/mensagem' => \Ifsp\CorreioElegante\Controller\MensageFormController::class,
    'POST|/mensagem' => \Ifsp\CorreioElegante\Controller\MensageController::class,
    'GET|/pagamento' => \Ifsp\CorreioElegante\Controller\PaymentController::class,
    'GET|/login' => \Ifsp\CorreioElegante\Controller\LoginFormController::class,
    'POST|/login' => \Ifsp\CorreioElegante\Controller\LoginController::class,
    'GET|/central-mensagens' => \Ifsp\CorreioElegante\Controller\MensagesCenterController::class,
    'POST|/central-mensagens' => \Ifsp\CorreioElegante\Controller\PaymentConfirmController::class
];