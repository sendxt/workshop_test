<?php

namespace Model;

class Car
{
    private $number;
    private $width;
    private $height;

    /**
     * Car constructor.
     *
     * @param string $number
     * @param int|null $width
     * @param int|null $height
     */
    public function __construct(string $number = null, int $width = null, int $height = null)
    {
        if ($width < 0 || $height < 0) {
            throw new \InvalidArgumentException();
        }

        $this->number = $number;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
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
     * @return int|null
     */
    public function getHeight(): ?int
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
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param string|null $number
     *
     * @return Car
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }
}