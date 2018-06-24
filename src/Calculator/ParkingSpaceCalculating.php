<?php

namespace Calculator;

use Model\Car;
use Model\Parking;

class ParkingSpaceCalculating
{
    /**
     * @param Parking $parking
     * @param Car $car
     *
     * @return bool
     */
    public static function calculate(Parking $parking, Car $car)
    {
        $parkingWidth = $parking->getWidth();
        $parkingHeight = $parking->getHeight();

        foreach ($parking->getCars() as $item) {
            if ($item->getNumber() === $car->getNumber()) {
                throw new \InvalidArgumentException('With this number car exist in parking');
            }

            $parkingWidth -= $item->getWidth() + Parking::SPACE_BEETWEN_CAR;
            $parkingHeight -= $item->getHeight() + Parking::SPACE_BEETWEN_CAR;
        }

        $parkingWidth -= $car->getWidth() + Parking::SPACE_BEETWEN_CAR;
        $parkingHeight -= $car->getHeight() + Parking::SPACE_BEETWEN_CAR;

        if ($parkingWidth > 0 && $parkingHeight > 0) {
            return true;
        }

        return false;
    }
}