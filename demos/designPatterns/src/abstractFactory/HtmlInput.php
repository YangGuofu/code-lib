<?php

namespace src\abstractFactory;


class HtmlInput extends Input
{
    public function render()
    {
        return "<input type='{$this->type}' name='{$this->name}'>";
    }
}