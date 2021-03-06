<?php
require "./Beverage.php";

class Beer extends Beverage {

private string $name;
private float $alcoholpercentage;

    private function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage) {
        parent::__construct($color,  $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }
//(forced as !float = put :float after the function but before the curly brackets) 
    private function getAlcoholPercentage(){
        return "This beverage has {$this->alcoholpercentage} % of alcohol.";
    }
}

