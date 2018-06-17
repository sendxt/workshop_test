<?php

namespace Model;

class Parking
{
    /**
     * @var int
     */
    private $area = 30;

    /**
     * @var array
     */
    private $cars = [];

    /**
     * @param Car $car
     */
    public function addCar(Car $car)
    {
        if (true === $this->checkFreeSpace($car)) {
            $this->cars[] = $car;
        }
    }

    /**
     * @param Car $car
     *
     * @return bool
     */
    private function checkFreeSpace(Car $car)
    {
        $parkingSpace = $this->getArea();
        foreach ($this->getCars() as $item) {
            $parkingSpace -= $item->getSize();
        }

        return $parkingSpace - $car->getSize() >= 0;
    }

    /**
     * @return array
     */
    public function getCars(): array
    {
        return $this->cars;
    }

    /**
     * @return int
     */
    public function getArea(): int
    {
        return $this->area;
    }

    /**
     * @param int $area
     *
     * @return $this
     */
    public function setArea(int $area)
    {
        $this->area = $area;

        return $this;
    }
}
