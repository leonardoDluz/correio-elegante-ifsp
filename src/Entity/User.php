<?php

namespace Ifsp\CorreioElegante\Entity;

class User
{
    public function __construct(
        public readonly string $userName,
        public readonly string $password
    ){}
}