<?php

declare(strict_types=1);

namespace Tests;

use Model\Car;
use Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testGetArea()
    {
        $parking = new Parking();
        $parking->setArea(20);

        $this->assertEquals('20', $parking->getArea());
    }

    public function testAddCar()
    {
        $car = new Car();
        $car->setSize(30);

        $car2 = new Car();
        $car2->setSize(18);

        $parking = new Parking();
        $parking->setArea(50);
        $parking->addCar($car);
        $parking->addCar($car2);

        $this->assertCount(1, $parking->getCars());
    }
}
