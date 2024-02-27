<?php

namespace Models;

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