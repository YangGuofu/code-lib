<?php
namespace tests;

use PHPUnit\Framework\TestCase;
use src\simpleFactory\VehicleFactory;
use src\simpleFactory\VehicleInterface;

class SimpleFactoryTes extends TestCase {

    /**
     * @test
     */
    public function createVehicle(){
        $factory = new VehicleFactory();

        $car = $factory->create('Car');
        $bike = $factory->create('Bike');

        $this->assertInstanceOf(VehicleInterface::class, $car);
        $this->assertInstanceOf(VehicleInterface::class, $bike);
    }
}