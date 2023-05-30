<?php

namespace Ifsp\CorreioElegante\Controller;

use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;

class PaymentConfirmController implements Controller
{
    public function __construct(private MensageRepository $mensageRepository)
    {
    }

    public function processRequest(): void
    {
        $paymentsPaid = [];
        $lastId = $this->mensageRepository->GetLastId();

        for ($i=1; $i <= $lastId; $i++) { 
            $paymentPaid = filter_input(INPUT_POST, "payment:$i");
            if ($paymentPaid != null) {
                array_push($paymentsPaid, $paymentPaid);
            }
        }

        $this->mensageRepository->updatePaymentStatus($paymentsPaid);

        header('Location:/central-mensagens');
    }
}