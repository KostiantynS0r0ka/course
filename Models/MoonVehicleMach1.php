<?php

namespace Models;

class MoonVehicleMach1 extends MoonVehicle
{
    public function getReducingGripValue(): int|float
    {
        return $this->terrain->getGripResistant() / 100;
    }
}