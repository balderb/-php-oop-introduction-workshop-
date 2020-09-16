<?php
declare(strict_types=1);

// Oefening 1 (first attempt)

class beverage {

    // declare properties

    private $color; // (string)
    private $price; // (float)
    private $temperature; // (string)

    // + foresee a construct

    function __construct($color, price, temperature = "cold") {
        $this->$color = $$color;

    }
}


// Oefening 1 (2nd attempt)


class Beverage
{
    public $temperature;
    public $color;
    public $price;

    public function __construct(
        string $color,
        float $price,
        string $temperature = "cold"
    )
    {
        $this->temperature = $temperature;
        $this->color = $color;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return "This beverage is " . $this->color . " and " . $this->price . ".";
    }
}

$cola = new Beverage('black', 2);
echo $cola->temperature . PHP_EOL;
echo $cola->getInfo() . PHP_EOL;





// Oefening 2 (first attempt)

class Beer extends Beverage {

    // add two more variables to the extended class Beer
    public string $name;
    public float $alcoholpercentage;

    // create a construct with the two extended (and public) variables (not sure about semicolons at the end)
        public function __construct(
            string $color,
            float $price,
            string $temperature = "cold",
            float $alcoholpercentage,
            string $name
        );

    // Foresee a construct with previous properties
            //// + sets values for name and alcoholpercentage (with the '=' symbol).
    {
        parent::__construct(
            $color,
            $price,
            $temperature
        );

        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;

        // Make getAlcoholpercentage (public function)
    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }

    $duvel = new Beer(

)















