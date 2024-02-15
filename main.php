<?php

// LivingCreature -> Monkey -> Human

class LivingCreature
{
    public $movingSpeed = 1;
    const MOVING_SPEED = 1;
    const FOOD = 'Micro bacteries';
    public function breathe(): string
    {
        return 'Inhale... Exhale....';
    }

    public function getMovingSpeed(): int
    {
        return static::MOVING_SPEED;
//        return self::MOVING_SPEED;
//        return $this->movingSpeed;
    }

    public function getFoodList(): string
    {
        return static::FOOD;
    }
}

class Monkey extends LivingCreature
{
    const FOOD = 'Banana';
    public $movingSpeed = 10;
    const MOVING_SPEED = 10;
    public function climbTree(): string
    {
        return 'Climbing a tree....';
    }
}

class Human extends Monkey
{
    const FOOD = 'Salads';
    const MOVING_SPEED = 25;

    public function speak(): string
    {
        return 'Hello! I can speak!';
    }
}

$livingCreature = new LivingCreature;
$monkey         = new Monkey;
$human          = new Human;

echo $livingCreature->breathe() . PHP_EOL;
echo $monkey->breathe() . PHP_EOL;
echo $human->breathe() . PHP_EOL;

echo $monkey->climbTree() . PHP_EOL;
echo $human->climbTree() . PHP_EOL;

echo $human->speak() . PHP_EOL;

echo 'My speed is: ' . $livingCreature->getMovingSpeed() . PHP_EOL;
echo 'My speed is: ' . $monkey->getMovingSpeed() . PHP_EOL;
echo 'My speed is: ' . $human->getMovingSpeed() . PHP_EOL;


echo 'I could eat: ' . $livingCreature->getFoodList() . PHP_EOL;
echo 'I could eat: ' . $monkey->getFoodList() . PHP_EOL;
echo 'I could eat: ' . $human->getFoodList() . PHP_EOL;



