<?php

namespace Ifsp\CorreioElegante\Controller;

use Piggly\Pix\Parser;
use Piggly\Pix\StaticPayload;
use Ifsp\CorreioElegante\Infrastructure\Repository\MensageRepository;

class PaymentController implements Controller
{
    public function __construct(private MensageRepository $mensageRepository)
    {
    }

    public function processRequest(): void
    {
        $keyType  = Parser::KEY_TYPE_PHONE;
        $keyValue = Parser::parsePhone('15996919369');
        $merchantName = 'Leonardo Domingos da Luz';
        $merchantCity = 'SAO PAULO';
        $amount = 0.01;
        $description = 'correio elegante';
        $tid = $this->getTid();
    
        $payload = (new StaticPayload())
                ->setPixKey($keyType, $keyValue)
                ->setMerchantName($merchantName)
                ->setMerchantCity($merchantCity)
                ->setAmount($amount)
                ->setTid($tid)
                ->setDescription($description);

        $pixCode = $payload->getPixCode();
        $qrCode = $payload->getQRCode();
        
        require_once __DIR__ . '/../../pages/payment.php';
    }

    private function getTid(): string
    {
        $lastId = $this->mensageRepository->GetLastId();
        return strval($lastId);
    }
}