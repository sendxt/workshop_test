<?php

namespace Tests;

use Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testGetTitle()
    {
        $car = new Car();
        $car->setTitle(10);

        $this->assertEquals('BMW', $car->getTitle());
    }
}
