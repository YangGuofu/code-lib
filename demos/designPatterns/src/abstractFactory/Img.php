<?php

namespace src\abstractFactory;


abstract class Img implements ElementInterface
{
    protected $src;

    public function __construct($src)
    {
        $this->src = $src;
    }
}