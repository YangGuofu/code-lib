<?php

namespace src\abstractFactory;


class HtmlImg extends Img
{
    public function render()
    {
        return "<img src='{$this->src}'/>";
    }
}