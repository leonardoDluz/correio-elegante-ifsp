<?php

namespace Ifsp\CorreioElegante\Entity;

class Student
{
    public function __construct(
        public readonly string $name,
        public readonly string $grade, 
        public readonly string $course
    ) {}
}