<?php

namespace src\multiton;


class Mysql extends Multiton
{
    public function __construct($user)
    {
        return "new Mysql({$user}})";
    }
}