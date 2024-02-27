<?php

use Models\Motorbike;
use Models\Sand;
use Models\Track;

require __DIR__ . '/vendor/autoload.php';

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

dd($sportBike); echo PHP_EOL;