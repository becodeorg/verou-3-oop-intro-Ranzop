<?php
require "./Beverage.php";

class Beer extends Beverage {

public string $name;
public float $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage) {
        parent::__construct($color,  $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }

    public function getAlcoholPercentage() {
        return "This beverage has {$this->alcoholpercentage} % of alcohol.";
    }
}

