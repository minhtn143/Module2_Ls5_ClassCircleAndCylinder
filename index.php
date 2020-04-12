<?php

include_once('Circle.php');
include_once('Cylinder.php');


$circle = new Circle('Circle 01', 3, "blue");
echo $circle->toString() . '<br/>';
echo 'Circle area: ' . $circle->calculateArea() . '<br/>';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br/><br/>';

$cylinder = new Cylinder('Cylinder 01', 3, "blue", 6);
echo $cylinder->toString() . '<br/>';
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br/><br/>';

$circle1 = new Circle('Circle 02', 6, "black");
echo $circle1->toString() . '<br/>';
echo 'Circle area: ' . $circle1->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle1->calculatePerimeter() . '<br/><br/>';

$cylinder1 = new Cylinder('Cylinder 01', 6, "blue", 10);
echo $cylinder1->toString() . '<br/>';
echo 'Cylinder area: ' . $cylinder1->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder1->calculatePerimeter() . '<br/><br/>';