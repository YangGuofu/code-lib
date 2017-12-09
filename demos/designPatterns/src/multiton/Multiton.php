<?php

namespace src\multiton;


abstract class Multiton
{
    private static $instances = [];

    public static function getInstance(){
        $key = get_called_class() . serialize(func_get_args());
        if ( !isset(self::$instances[$key]) ){
            echo 'new instance'.'<br>';
            $reflectionClass = new \ReflectionClass(get_called_class());
            $instance = $reflectionClass->newInstanceArgs(func_get_args());
            self::$instances[$key] = $instance;
        }

        return self::$instances[$key];
    }

    private function __construct(){}
    private function __clone(){}
    private function __wakeup(){}
}