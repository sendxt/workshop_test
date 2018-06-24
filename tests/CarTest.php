<?php

namespace Tests;

use Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /**
     * @dataProvider numberProvider
     */
    public function testGetNumber($number)
    {
        $car = new Car();
        $car->setNumber($number);

        $this->assertEquals($number, $car->getNumber());
    }

    /**
     * @dataProvider sizeProvider
     */
    public function testGetSize($width, $height)
    {
        $car = new Car('GRV020', $width, $height);

        $this->assertEquals($width, $car->getWidth());
        $this->assertEquals($height, $car->getHeight());
    }

    public function numberProvider()
    {
        return [
            ['GRV020'],
            ['EVO020'],
        ];
    }

    public function sizeProvider()
    {
        return [
            [10, 10],
            [100, 100],
        ];
    }
}
