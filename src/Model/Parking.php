<?php

namespace Model;

class Parking
{
    private $area;

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