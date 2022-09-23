<?php

require_once __DIR__ . '/class/Circle.php';
require_once __DIR__ . '/class/Triangle.php';


$myCircle = new Circle('Cerchio_1', 10);
$myTriangle = new Triangle('Triangolo_2', 20, 30);

echo "Area del cerchio: " . $myCircle->getArea() . "<br>";
echo "Area del triangolo: " . $myTriangle->getArea() . "<br>";