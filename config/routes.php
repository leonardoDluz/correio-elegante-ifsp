<?php

return [
    'GET|/' => \Ifsp\CorreioElegante\Controller\HomeController::class,
    'GET|/mensagem' => \Ifsp\CorreioElegante\Controller\MensageFormController::class,
    'POST|/mensagem' => \Ifsp\CorreioElegante\Controller\MensageController::class
];