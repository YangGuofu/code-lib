<?php

namespace src\factoryMethod;


class Car implements VehicleInterface
{
    protected $color;
    protected $speed;

    public function __construct($speed)
    {
        $this->speed = $speed;
    }

    public function setColor($color){
        $this->color = $color;
    }
}