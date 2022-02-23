<?php
require "./Beverage.php";

class Beer extends Beverage {

protected string $name;
protected float $alcoholpercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholpercentage) {
        parent::__construct($color,  $price, $temperature);
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
    }
//(forced as !float = put :float after the function but before the curly brackets) 
    public function getAlcoholPercentage(){
        return "Thank you for ordering a $this->name; watch out, it has {$this->alcoholpercentage} % of alcohol, please drink responsibly";
    }
}
