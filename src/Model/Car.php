<?php

namespace Model;

class Car
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
     * @return Car
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }
}