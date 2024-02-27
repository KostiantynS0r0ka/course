<?php

namespace Models;

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