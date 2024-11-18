<?php
include_once("php-shape/Circle.php");
include_once("php-shape/Rectangle.php");
include_once("php-shape/Square.php");





$shapeObjs;

$shapeObjs[] = new Circle('hình tròn', 3);
$shapeObjs[] = new Rectangle('hình chữ nhật', 4, 8);
$shapeObjs[] = new Square('hình vuông1', 6);
$shapeObjs[] = new Square('hình vuông2', 6);


foreach ($shapeObjs as $shape) {
    if ($shape instanceof Colorable) {
        echo $shape->howToColor() . '';
    }
    echo $shape->show() . '<br>';
}
