<?php

namespace Model;

class Car
{
    private $title;
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