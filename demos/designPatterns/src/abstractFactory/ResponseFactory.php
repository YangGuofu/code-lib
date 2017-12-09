<?php

namespace src\abstractFactory;


abstract class ResponseFactory
{
    abstract public function img($src);

    abstract public function input($type, $name);
}