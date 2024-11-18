<?php

include_once('resizeable.php');
include_once('Colorable.php');
include_once('Rectangle.php');



class Square extends Rectangle implements Resizeable, Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize($percent)
    {
        if (!is_numeric($percent)) {
            throw new InvalidArgumentException('The percent value must be numeric.');
        }
        $this->width += ($this->width / 100) * $percent;
        $this->height += ($this->height / 100) * $percent;
    }
    public function howToColor()
    {
        return 'Color all four sides.';
    }
}
