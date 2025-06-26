<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Services\Car;
use App\Services\Container;
use App\Services\Engine;

require 'vendor/autoload.php';

$engine = new Engine();
//$car = new Car($engine, 'qora', 'Malibu', 220, 'Uzbekistan');

$container = new Container;
$car = $container->make(Car::class);
echo $car->seed(160);