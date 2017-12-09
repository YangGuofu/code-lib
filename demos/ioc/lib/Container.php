<?php

namespace lib;


class Container
{
    protected $binds;

    public function bind($abstract, $concrete)
    {
        $this->binds[$abstract] = $concrete;
    }

    public function make($abstract, ...$params)
    {
        return call_user_func($this->binds[$abstract], $params);
    }
}