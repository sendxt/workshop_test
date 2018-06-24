<?php

declare(strict_types=1);

namespace Tests;

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
     * @dataProvider correctSpaceProvider
     */
    public function testCorrectSpace($width, $height)
    {
        $parking = new Parking($width, $height);

        $this->assertEquals($width, $parking->getWidth());
        $this->assertEquals($height, $parking->getHeight());
    }

    public function correctSpaceProvider()
    {
        return [
            [30, 30],
            [300, 300],
        ];
    }
}
