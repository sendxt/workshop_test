<?php

namespace Tests;

use Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    public function testGetTitle()
    {
        $car = new Car();
        $car->setTitle('BMW');

        $this->assertEquals('BMW', $car->getTitle());
    }

    public function testGetSize()
    {
        $car = new Car();
        $car->setSize(10);

        $car2 = new Car();
        $car2->setSize(100);

        $this->assertEquals(10, $car->getSize());
        $this->assertEquals(1000, $car->getSize());
    }
}
