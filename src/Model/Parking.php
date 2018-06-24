<?php

namespace Model;

class Parking
{
    private $title;

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


}
