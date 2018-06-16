<?php

namespace Model;

class Car
{
    private $size;

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return $this
     */
    public function setSize(int $size)
    {
        $this->size = $size;

        return $this;
    }
}