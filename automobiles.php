<?php

class Terrain
{
    protected const GRIP_RESISTANT = 0;

    public function getGripResistant()
    {
        return static::GRIP_RESISTANT;
    }
}

class Sand extends Terrain
{
    protected const GRIP_RESISTANT = 10;
}

class Track extends Terrain
{
    protected const GRIP_RESISTANT = 1;
}


// Vehicle -> EarthVehicle -> ....  .... ....
// Vehicle -> MoonVehicle -> ....  .... ....

abstract class Vehicle
{
    protected string $manufacturer;
    protected string $model;
    protected int|float $speed;

    public function __construct(
        string $manufacturer,
        string $model,
        float|int $speed
    ) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->speed = $speed;
    }

    public function getMaxSpeed(): int|float
    {
        return $this->speed;
    }

    abstract public function getCurrentMaxSpeed(): int|float;
}

abstract class EarthVehicle extends Vehicle
{
    protected Terrain $terrain;

    public function __construct(
        string $manufacturer,
        string $model,
        float|int $speed,
        Terrain $terrain
    ) {
        $this->terrain = $terrain;
        parent::__construct($manufacturer, $model, $speed);
    }

    abstract public function getReducingGripValue(): int|float;

    public function getCurrentMaxSpeed(): int|float
    {

        return $this->speed - $this->speed * $this->getReducingGripValue();
    }
}

abstract class MoonVehicle extends EarthVehicle
{
    public function getCurrentMaxSpeed(): int|float
    {
        $decreasedValueForMoon = $this->getReducingGripValue() / 2;
        return $this->speed - $this->speed * $decreasedValueForMoon;
    }
}

class Motorbike extends EarthVehicle
{

    public function getReducingGripValue(): int|float
    {
        return $this->terrain->getGripResistant() / 100;
    }
}

class MoonVehicleType1 extends MoonVehicle
{
    public function getReducingGripValue(): int|float
    {
        return $this->terrain->getGripResistant() / 100;
    }
}

$sandTerrain = new Sand;
$trackTerrain = new Track;

$enduroBike = new Motorbike('Honda', 'Africa', 210, $sandTerrain);
$sportBike  = new Motorbike('Honda', 'CBR', 301, $trackTerrain);
$sportBike2  = new Motorbike('Honda', 'CBR', 301, $sandTerrain);

echo 'Max speed is: ' . $enduroBike->getMaxSpeed() . PHP_EOL;
echo 'Current max speed is: ' . $enduroBike->getCurrentMaxSpeed() . PHP_EOL;


echo PHP_EOL;

echo 'Max speed is: ' . $sportBike->getMaxSpeed() . PHP_EOL;
echo 'Current max speed is: ' . $sportBike->getCurrentMaxSpeed() . PHP_EOL;

echo PHP_EOL;

echo 'Max speed is: ' . $sportBike2->getMaxSpeed() . PHP_EOL;
echo 'Current max speed is: ' . $sportBike2->getCurrentMaxSpeed() . PHP_EOL;

//Max speed is: 210
//Current max speed is: -1890