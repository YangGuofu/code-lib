<?php

namespace tests;


use PHPUnit\Framework\TestCase;
use src\staticFactory\FormatterFactory;
use src\staticFactory\FormatterInterface;

class StaticFactoryTest extends TestCase
{
    public function getType(){
        return array(
            array('string'),
            array('number')
        );
    }

    /**
     * @test
     * @dataProvider getType
     * @param $type
     */
    public function create($type){
        $obj = FormatterFactory::factory($type);

        $this->assertInstanceOf(FormatterInterface::class, $obj);
    }
}