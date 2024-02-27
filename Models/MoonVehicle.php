<?php

namespace Models;

abstract class MoonVehicle extends EarthVehicle
{
    public function getCurrentMaxSpeed(): int|float
    {
        $decreasedValueForMoon = $this->getReducingGripValue() / 2;
        return $this->speed - $this->speed * $decreasedValueForMoon;
    }
}