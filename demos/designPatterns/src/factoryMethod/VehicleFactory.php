<?php

namespace src\factoryMethod;


abstract class VehicleFactory
{
    const SLOW = 1;
    const FAST = 2;

    abstract protected function createVehicle($type);

    public function create($type){
        $obj = $this->createVehicle($type);
        // do something...

        return $obj;
    }
}