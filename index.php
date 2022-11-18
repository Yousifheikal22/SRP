<?php

require_once __DIR__ . "/vendor/autoload.php";
use SOLID\SRP\Bus;
use SOLID\SRP\Driver;
use SOLID\SRP\Route;

$bus = new Bus(505);
$driver = new Driver("Yousif", 23, 5545, "Cairo-Egypt");
$route1 = new Route("Cairo", "Alex", 255);
$bus->setDriver($driver);
$bus->setColor('Green');
$bus->setMaximumSpeed(145);
$bus->setMaximumPassenger(55);
$bus->addRoute($route1);

echo "<pre>";
var_dump($bus);
echo "</pre>";
