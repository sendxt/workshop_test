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

    public function testCorrectSpace()
    {
        $parking = new Parking(30, 30);

        $this->assertEquals(30, $parking->getWidth());
        $this->assertEquals(30, $parking->getHeight());
    }
}
