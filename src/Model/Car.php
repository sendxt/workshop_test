<?php

namespace Model;


class Car
{
    private $number;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }
}