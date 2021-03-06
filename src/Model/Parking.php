<?php

namespace Model;

use Calculator\ParkingSpaceCalculating;

class Parking
{
    public const SPACE_BEETWEN_CAR = 2;

    /**
     * @var
     */
    private $title;

    /**
     * @var int|int|null
     */
    private $width;

    /**
     * @var int|int|null
     */
    private $height;

    /**
     * @var array
     */
    private $cars = [];

    /**
     * Parking constructor.
     *
     * @param int|null $width
     * @param int|null $height
     *
     * @throws \Exception
     */
    public function __construct(int $width = null, int $height = null)
    {
        if ($width < 0 || $height < 0) {
            throw new \InvalidArgumentException();
        }

        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param $title
     *
     * @return Parking
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param $width
     *
     * @return Parking
     */
    public function setWidth($width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param $height
     *
     * @return Parking
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param Car $car
     */
    public function addCar(Car $car)
    {
        if (true === ParkingSpaceCalculating::calculate($this, $car)) {
            $this->cars[] = $car;
        }
    }

    /**
     * @return array
     */
    public function getCars(): array
    {
        return $this->cars;
    }
}
