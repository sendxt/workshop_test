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

    /**
     * @dataProvider sizeProvider
     */
    public function testGetSize($size)
    {
        $car = new Car();
        $car->setSize($size);

        $this->assertEquals($size, $car->getSize());
    }

    public function sizeProvider()
    {
        return [
            [10],
            [100],
        ];
    }
}
