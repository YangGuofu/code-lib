<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use src\factoryMethod\VehicleFactory;
use src\factoryMethod\MiniFactory;
use src\factoryMethod\SuperFactory;
use src\factoryMethod\VehicleInterface;

class FactoryMethodTest extends TestCase {
    function getFactory(){
        return array(
            array(new MiniFactory()),
            array(new SuperFactory())
        );
    }

    /**
     * @test
     * @dataProvider getFactory
     */
    public function create($factory){
        $types = [VehicleFactory::SLOW, VehicleFactory::FAST];

        foreach ($types as $type){
            $obj = $factory->create($type);
            $this->assertInstanceOf(VehicleInterface::class, $obj);
        }
    }

}