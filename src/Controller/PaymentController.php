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
        $keyValue = Parser::parsePhone('15998382760');
        $merchantName = 'Giovanna Lopes Martins';
        $merchantCity = 'SAO PAULO';
        $amount = $this->getMensageType();
        $description = 'correio elegante';
        $tid = $this->getTid();
    
        $payload = (new StaticPayload())
                ->setPixKey($keyType, $keyValue)
                ->setMerchantName($merchantName)
                ->setMerchantCity($merchantCity)
                ->setAmount($amount)
                ->setTid($tid)
                ->setDescription($description);

        $_SESSION['pixCode'] = $payload->getPixCode();
        $_SESSION['qrCode'] = $payload->getQRCode();
        
        require_once __DIR__ . '/../../pages/payment.php';
    }

    private function getTid(): string
    {
        $lastId = $this->mensageRepository->GetLastId();
        return strval($lastId);
    }

    private function getMensageType(): float
    {
        $mensageType = $_SESSION['type'];

        if ($mensageType === 'simples') return 3.00;
        if ($mensageType === 'com-pirulito') return 3.50;
        if ($mensageType === 'com-fini') return 4.00;
        
        require_once __DIR__ . '/../../pages/expired-payment.php';
    }
}