<?php

namespace src\factoryMethod;


class MiniFactory extends VehicleFactory
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent::SLOW:
                return new Bike(10);
                break;
            case parent::FAST:
                return new Car(20);
                break;
            default:
                throw new \InvalidArgumentException("type:$type is not valid");
        }
    }
}