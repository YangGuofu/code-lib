<?php

namespace tests;


use PHPUnit\Framework\TestCase;
use src\abstractFactory\ElementInterface;
use src\abstractFactory\HtmlFactory;
use src\abstractFactory\JsonFactory;
use src\abstractFactory\ResponseFactory;

class AbstractFactoryTest extends TestCase
{
    public function getFactory(){
        return array(
            array(new HtmlFactory()),
            array(new JsonFactory())
        );
    }

    /**
     * @test
     * @dataProvider getFactory
     * @param ResponseFactory $factory
     */
    public function create(ResponseFactory $factory){
        $objElements = array(
            $factory->img('people.png'),
            $factory->input('text', 'mobile'),
        );
        $this->assertContainsOnly(ElementInterface::class, $objElements);
    }
}