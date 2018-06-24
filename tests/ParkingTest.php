<?php

declare(strict_types=1);

namespace Tests;

use Model\Car;
use PHPUnit\Framework\TestCase;
use Model\Parking;

class ParkingTest extends TestCase
{
    public function testGetTitle()
    {
        $parking = new Parking();
        $parking->setTitle('Europa');

        $this->assertEquals('Europa', $parking->getTitle());
    }

    /**
     * @dataProvider spaceProvider
     */
    public function testCorrectSpace($width, $height)
    {
        $parking = new Parking($width, $height);

        $this->assertEquals($width, $parking->getWidth());
        $this->assertEquals($height, $parking->getHeight());
    }

    public function testAddCar()
    {
        $parking = new Parking(200, 200);
        $car = new Car('GRV020', 20, 20);
        $car2 = new Car('GRV030', 20, 20);

        $parking->addCar($car);
        $parking->addCar($car2);

        $this->assertCount(2, $parking->getCars());
    }

    public function spaceProvider()
    {
        return [
            [30, 30],
            [300, 300],
        ];
    }
}
