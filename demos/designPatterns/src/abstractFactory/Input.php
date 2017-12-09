<?php

namespace src\abstractFactory;


abstract class Input implements ElementInterface
{
    protected $type;
    protected $name;

    public function __construct($type, $name)
    {
        $this->type = $type;
        $this->name = $name;
    }
}