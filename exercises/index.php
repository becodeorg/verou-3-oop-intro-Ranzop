<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "./Beer.php";

$duvel = new Beer ("blond", 3.5, "fresh", "Duvel", 8.5);

echo $duvel->getAlcoholPercentage();

$duvel->getAlcoholPercentage();



