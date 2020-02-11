<?php

declare(strict_types=1);

class LightSwitch
{
    public function __construct()
    {
        $status = false;
        $this->status = $status;
    }

    public function isOn(): bool
    {
        return $this->status;
    }

    public function turnOn(): bool
    {
        return $this->status = true;
    }

    public function turnOff(): bool
    {
        return $this->status = false;
    }
}

$lightSwitch = new LightSwitch();

// you can check whether it is on or not
var_dump($lightSwitch->isOn()); // bool(false)

// you can turn it on
$lightSwitch->turnOn();
var_dump($lightSwitch->isOn()); // bool(true)

// you can turn it off
$lightSwitch->turnOff();
var_dump($lightSwitch->isOn()); // bool(false)