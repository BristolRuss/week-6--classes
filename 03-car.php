<?php

declare(strict_types=1);

class Car
{
    private $make;
    private $numberPlate;

    public function __construct(string $make, string $numberPlate)
    {
        $mileage = 0;
        $this->make = $make;
        $this->numberPlate = $numberPlate;
        $this->mileage = $mileage;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getNumberPlate(): string
    {
        return $this->numberPlate;
    }

    public function getMileage(): float
    {
        return $this->mileage;
    }

    public function addJourney($newJourney)
    {
        $this->mileage = $this->mileage + $newJourney;
    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
var_dump($car->getNumberplate()); // string(8) "XY11 4TY"
var_dump($car->getMake()); // string(4) "Ford"
var_dump($car->getMileage()); // int(0)

// you can add journey
$car->addJourney(100);
var_dump($car->getMileage()); // int(100)

$car->addJourney(200);
var_dump($car->getMileage()); // int(300)