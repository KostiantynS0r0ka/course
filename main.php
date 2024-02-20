<?php

class Shape
{
    protected $mainDimension;

    public function __construct($mainDimension)
    {
        $this->mainDimension = $mainDimension;
    }
}

class Square extends Shape
{
    public function getArea()
    {
        return $this->mainDimension * $this->mainDimension;
    }
}

class Circle extends Shape
{

    public function getArea()
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

foreach ($figures as $figure) {
    echo $figure->getArea() . PHP_EOL;
}

//144
//452.16
//100
//39388.16
//24336
//256
//907.46
//47505.06