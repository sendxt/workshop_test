<?php

namespace Tests;

use Model\Parking;
use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testCreate()
    {
        $parking = new Parking();
        $this->assertInstanceOf(Parking::class, $parking);
    }
}
