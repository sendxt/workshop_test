<?php

namespace Tests;

use Calculator\ParkingSpaceCalculating;
use Model\Car;
use Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingSpaceCalculatingTest extends TestCase
{
    public function testAddCarCalculateTrue()
    {
        $parking = new Parking(200, 200);
        $car = new Car('GRV020', 190, 190);

        $this->assertTrue(ParkingSpaceCalculating::calculate($parking, $car));
    }

    public function testAddCarCalculateFalse()
    {
        $parking = new Parking(200, 200);
        $car = new Car('GRV020', 200, 200);

        $this->assertFalse(ParkingSpaceCalculating::calculate($parking, $car));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testAddCarCalculateException()
    {
        $parking = new Parking(200, 200);
        $car = new Car('GRV020', 190, 190);
        $parking->addCar($car);
        $car2 = new Car('GRV020', 190, 190);

        ParkingSpaceCalculating::calculate($parking, $car2);
    }
}
