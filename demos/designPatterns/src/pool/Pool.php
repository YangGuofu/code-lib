<?php

namespace src\pool;


class Pool
{
    private $instances = [];

    public function get()
    {
        if (count($this->instances)){
            return array_pop($this->instances);
        }

        return $this;
    }
    public function set($instance)
    {
        $this->instances[] = $instance;
    }
}