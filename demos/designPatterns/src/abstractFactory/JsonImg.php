<?php

namespace src\abstractFactory;


class JsonImg extends Img
{
    public function render()
    {
        return json_encode(array('src' => $this->src));
    }
}