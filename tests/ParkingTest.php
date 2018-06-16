<?php

declare(strict_types=1);

/*
 * @copyright C UAB NFQ Technologies
 *
 * This Software is the property of NFQ Technologies
 * and is protected by copyright law – it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB NFQ Technologies:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 */

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

    public function testGetArea()
    {
        $parking = new Parking();
        $parking->setArea(20);

        $this->assertEquals('20', $parking->getArea());
    }
}