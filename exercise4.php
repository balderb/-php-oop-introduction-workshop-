<?php
<declare(strict_types=1);

// Oefening 4 (first attempt)

class Beer extends Beverage {

// add two more variables to the extended class Beer
protected string $name;
protected float $alcoholpercentage;

// create a construct with the two extended (and public) variables (not sure about semicolons at the end)
public function __construct(
string $color,
float $price,
string $temperature = "cold",
float $alcoholpercentage,
string $name
)

// Foresee a construct with previous properties
// + sets values for name and alcoholpercentage (with the '=' symbol).

{
    parent::__construct($color, $price, $temperature)
}

$this->name = $name;
$this->alcoholpercentage = $alcoholpercentage;

// Make getAlcoholpercentage (public function)
public function getAlcoholpercentage(): float
{
return $this->alcoholpercentage;
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholpercentage() . "<br>";
echo $duvel->alcoholpercentage . "<br>";
echo $duvel->color . "<br>";
echo $duvel->getInfo() . "<br>";

$cola = new Beverage('black', 2);
echo $cola->getAlcoholpercentage();
