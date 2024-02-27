<?php

namespace Models;

class Terrain
{
    protected const GRIP_RESISTANT = 0;

    public function getGripResistant()
    {
        return static::GRIP_RESISTANT;
    }
}