<?php

namespace Ifsp\CorreioElegante\Entity;

class Mensage 
{
    public function __construct(
        public readonly Student $student, 
        public readonly string $content,
        public readonly string $paymentStatus
    ) {}
}  