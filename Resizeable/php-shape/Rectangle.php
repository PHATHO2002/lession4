<?php

include_once('Shape.php');
include_once('resizeable.php');


class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize($percent)
    {
        if (!is_numeric($percent)) {
            throw new InvalidArgumentException('The percent value must be numeric.');
        }
        $this->width += ($this->width / 100) * $percent;
        $this->height += ($this->height / 100) * $percent;
    }
}
