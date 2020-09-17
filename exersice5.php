<?php
declare(strict_types=1);

define("barname", "barname");
echo GREETING;

class Beverage
{
private $temperature;
private $color;
private $price;

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


class Beer extends Beverage
{
    private $name;
    private $alcoholpercentage;

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

    // create beerInfo method
    private function beerInfo(): string
    {
        return "Hi, i'm " . $this->name . " and have an alochol percentage of " . $this->alcoholpercentage . " and I have a " . $this->getColor();
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