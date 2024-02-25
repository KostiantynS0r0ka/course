<?php

interface ShapeInterface
{
    public function getArea():int|float;
}
class Shape
{
    protected $mainDimension;

    public function __construct($mainDimension)
    {
        $this->mainDimension = $mainDimension;
    }
}

class Square extends Shape implements ShapeInterface
{
    public function getArea(): int|float
    {
        return $this->mainDimension * $this->mainDimension;
    }
}

class Circle extends Shape implements ShapeInterface
{

    public function getArea(): int|float
    {
        return 3.14 * $this->mainDimension * $this->mainDimension;
    }
}

$figures = [];

$figures[]  = new Square(12);
$figures[]  = new Circle(12);
$figures[]  = new Square(10);
$figures[]  = new Circle(112);
$figures[]  = new Square(156);
$figures[]  = new Square(16);
$figures[]  = new Circle(17);
$figures[]  = new Circle(123);
//$figures[]  = new stdClass();

class AreaCalculator
{
    private $storage = [];

    public function addToStorage(ShapeInterface $object)
    {
        $this->storage[] = $object;
    }
    public function calculateArea(ShapeInterface $object)
    {
        echo $object->getArea() . PHP_EOL;
    }
}

$areaCalculator = new AreaCalculator;

foreach ($figures as $figure) {
    $areaCalculator->calculateArea($figure);
//    echo $figure->getArea() . PHP_EOL;
}

//144
//452.16
//100
//39388.16
//24336
//256
//907.46
//47505.06