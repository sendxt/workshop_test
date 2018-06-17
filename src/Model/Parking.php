<?php

namespace Model;

class Parking
{
    private const SPACE_BEETWEN_CAR = 2;

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
        $space = 0;
        foreach ($this->getCars() as $item) {
            $space += $item->getSize() + self::SPACE_BEETWEN_CAR;
        }

        $space += $car->getSize() + self::SPACE_BEETWEN_CAR;

        return $this->getArea() - $space >= 0;
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
     * @param int $space
     *
     * @return $this
     */
    private function reduceArea(int $space)
    {
        $this->area -= $space;

        return $this;
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
