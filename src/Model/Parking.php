<?php

namespace Model;

class Parking
{
    private $area;

    private $cars = [];

    public function addCar(Car $car)
    {
        $this->cars[] = $car;
    }

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