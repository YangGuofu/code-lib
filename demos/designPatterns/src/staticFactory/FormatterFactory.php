<?php

namespace src\staticFactory;


class FormatterFactory
{
    public static function factory($type){
        $className = __NAMESPACE__ . '\Format' . ucfirst($type);

        return new $className;
    }
}