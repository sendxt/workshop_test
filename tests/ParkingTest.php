<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

class ParkingTest extends TestCase
{
    public function testGetArea()
    {
        $parking = new Parking();
        $parking->setTitle('Europa');

        $this->assertEquals('Europa', $parking->getTitle());
    }
}
