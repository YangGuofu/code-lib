<?php

namespace src\abstractFactory;


class JsonFactory extends ResponseFactory
{
    public function img($src)
    {
        return new JsonImg($src);
    }

    public function input($type, $name)
    {
        return new JsonInput($type, $name);
    }
}