<?php

namespace src\abstractFactory;


class JsonInput extends Input
{
    public function render()
    {
        return json_encode(array('type' => $this->type, 'name' => $this->name));
    }
}