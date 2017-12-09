<?php

namespace src\factoryMethod;


class SuperFactory extends VehicleFactory
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::SLOW:
                return new Bike(100);
                break;
            case parent::FAST:
                return new Car(200);
                break;
            default:
                throw new \InvalidArgumentException("type:$type is not valid");
        }
    }
}