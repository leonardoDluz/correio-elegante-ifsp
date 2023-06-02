<?php

namespace Ifsp\CorreioElegante\Entity;

use DateTime;

class Mensage 
{
    public function __construct(
        public readonly Student $student, 
        public readonly string $content,
        public readonly string $paymentStatus,
        public readonly string $type,
        public readonly DateTime $date,
        public readonly DateTime $hours

    ) {}
}  