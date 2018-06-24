<?php

namespace Tests;

use Model\Car;
use Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingSpaceCalculatingTest extends TestCase
{
    public function testAddCarCalculateTrue()
    {
        $calculating = new ParkingSpaceCalculating();

        $parking = new Parking(200, 200);
        $car = new Car('GRV020', 200, 200);

        $this->assertTrue($calculating->calculate($parking, $car));
    }
}
