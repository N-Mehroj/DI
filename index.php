<?php


use App\Services\Car;
use App\Services\Engine;

require 'vendor/autoload.php';

$engine = new Engine();
$car = new Car($engine, 'qora', 'Malibu', 220, 'Uzbekistan');

echo $car->seed(160);