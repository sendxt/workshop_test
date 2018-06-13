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

use Model\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase
{
    /**
     * @dataProvider numberProvider
     */
    public function testGetNumber($number)
    {
        $car = new Car($number);
        $this->assertEquals($number, $car->getNumber());
    }

    public function numberProvider()
    {
        return [
            ['DEV 001'],
            ['DEV 002'],
        ];
    }
}