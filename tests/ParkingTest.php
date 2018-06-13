<?php

namespace Tests;

use Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testCreate()
    {
        $parking = new Parking();
        $this->assertInstanceOf(get_class($parking), $parking);
    }

    public function testGetLenght()
    {
        $parking = new Parking();
        $this->assertEquals('10', $parking->getLength());
    }

    public function testGetWidth()
    {
        $parking = new Parking();
        $this->assertEquals('200', $parking->getWidth());
    }
}
