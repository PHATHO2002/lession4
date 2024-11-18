<?php
include_once("php-shape/Circle.php");
include_once("php-shape/Rectangle.php");
include_once("php-shape/Square.php");



$shapeObj;

$shapeObj[] = new Circle('hình tròn', 3);
$shapeObj[] = new Rectangle('hình chữ nhật', 4, 8);
$shapeObj[] = new Square('hình vuông', 6);

foreach ($shapeObj as $shape) {
    $nameShape = $shape->show();
    echo $nameShape . ' diện tích =' . $shape->calculateArea() . '<br>';
}
echo 'diện tích sau khi sử dụng interface resizeable' . '<br>';
foreach ($shapeObj as $shape) {
    $ranNum = rand(1, 100);
    $shape->resize($ranNum);
    echo $nameShape . ' diện tích sau khi tăng ' .  $ranNum . '% s=' . $shape->calculateArea() . '<br>';
}
