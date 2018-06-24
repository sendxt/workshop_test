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

    /**
     * @dataProvider carProvider
     */
    public function testAddCar($number, $width, $height)
    {
        $parking = new Parking(200, 200);
        $car = new Car($number, $width, $height);
        $parking->addCar($car);

        $this->assertEquals($number, $parking->getCars()[0]->getNumber());
        $this->assertCount(1, $parking->getCars());
    }

    public function carProvider()
    {
        return [
            ['GRV020', 20, 20],
            ['GRV030', 20, 20],
        ];
    }

    public function spaceProvider()
    {
        return [
            [30, 30],
            [300, 300],
        ];
    }
}
