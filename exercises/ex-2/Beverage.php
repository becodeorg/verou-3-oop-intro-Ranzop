<?php 
class Beverage
{
    public $color;
    // this var is available in the class only
    public $price;
    public $temperature;


    public function __construct(string $color,float $price,string $temperature) // here, we set the default value
        {
        $this ->color = $color;
        // this color can be accessed elsewhere
        $this ->price = $price;
        $this ->temperature = $temperature;
        }


    public function getInfo()
    {
    echo "This beverage is $this->temperature and $this->color"; 
    }
}