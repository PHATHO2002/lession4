<?php
include_once('resizeable.php');
include_once('Shape.php');

class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
    public function resize($percent)
    {
        if (!is_numeric($percent)) {
            throw new InvalidArgumentException('The percent value must be numeric.');
        }
        $this->radius += ($this->radius / 100) * $percent;
    }
}
