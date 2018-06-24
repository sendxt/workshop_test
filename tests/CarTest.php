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
    public function testGetSize($size)
    {
        $car = new Car();
        $car->setSize($size);

        $this->assertEquals($size, $car->getSize());
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
            [10],
            [100],
        ];
    }
}
