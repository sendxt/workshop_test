<?php

namespace Model;

class Car
{
    private $number;
    private $size;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param $size
     *
     * @return Car
     */
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return Car
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }
}