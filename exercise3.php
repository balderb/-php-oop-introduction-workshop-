<?php

// Oefening 3 (first attempt)

    // Copy the code of exercise 2 to here and delete everything related to cola.
    // Making the variables private and adding "getters" and "setters"
    // Make all properties private. Make all the other prints work without error.
    // After fixing the errors. Change the color of Duvel to light instead of blond and
    // also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
    // Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcohol percentage of 8.5 and
    // I have a light color."Make sure that u use the variables and not just this text line.
    // Print this method on the screen on a new line. Do not use echo in the private method in the class itself!

class Beverage
{
    private $temperature;
    private $color;
    private price;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->temperature = $temperature;
        $this->color = $color;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        return "This beverage is " . $this->temperature . " and " . $this->color . ".";
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }
}

class Beer extends Beverage
{
    private $name, $alcoholpercentage;

    public function __construct(string $name, float $alcoholpercentage, string $color, float $price, string $temperature = "cold")
    {
        $this->name = $name;
        $this->alcoholpercentage = $alcoholpercentage;
        parent::__construct($color, $price, $temperature = "cold");
    }

    public function getAlcoholpercentage(): float
    {
        return $this->alcoholpercentage;
    }

    private function beerInfo(): string
    {
        return "Hi i'm " . $this->name . " and have an alochol percentage of " . $this->alcoholpercentage . " and I have a " . $this->getColor() . " color.";
    }

    public function getBeerInfo(): string
    {
        return $this->beerInfo();
    }

}


$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholpercentage() . "<br>";
echo $duvel->getAlcoholpercentage() . "<br>";
echo $duvel->getColor() . "<br>";
echo $duvel->getInfo() . "<br>";
$duvel->setColor('light');
echo $duvel->getColor() . "<br>";
echo $duvel->getBeerInfo() . "<br>";







