<?php

namespace Model;

class Parking
{
    private $length;

    public function __construct($length = null)
    {
        $this->length = $length;
    }

    public function getLength()
    {
        return $this->length;
    }
}