<?php

namespace src\simpleFactory;

class VehicleFactory
{
    protected $vehicleList = array();

    public function __construct()
    {
        $this->vehicleList = array(
            'Bike' => __NAMESPACE__ . '\Bike',
            'Car' => __NAMESPACE__ . '\Car',
        );
    }

    public function create($vehicle){
        return new $this->vehicleList[$vehicle];
    }
}