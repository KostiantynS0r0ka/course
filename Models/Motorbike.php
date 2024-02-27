<?php

namespace Models;

class Motorbike extends EarthVehicle
{

    public function getReducingGripValue(): int|float
    {
        return $this->terrain->getGripResistant() / 100;
    }
}