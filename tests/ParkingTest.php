<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Model\Parking;

class ParkingTest extends TestCase
{
    public function testGetArea()
    {
        $parking = new Parking();
        $parking->setTitle('Europa');

        $this->assertEquals('Europa', $parking->getTitle());
    }
}
