<?php 
class Beverage
{
    private $color;
    // this var is available in the class only
    private $price;
    private $temperature;


    public function __construct(string $color,float $price,string $temperature) // here, we set the default value
        {
        $this ->color = $color;
        // this color can be accessed elsewhere
        $this ->price = $price;
        $this ->temperature = $temperature;
        }


    public function getInfo()
    {
    echo "This beverage is $this->temperature and $this->color, and it costs $this->price"; 
    }
}