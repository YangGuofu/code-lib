<?php

namespace src\abstractFactory;


class HtmlFactory extends ResponseFactory
{
    public function img($src)
    {
        return new HtmlImg($src);
    }

    public function input($type, $name)
    {
        return new HtmlInput($type, $name);

    }
}