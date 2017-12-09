<?php

namespace src\multiton;


class PostgresSql extends Multiton
{
    public function __construct($user, $pwd)
    {
        return "new PostgreSql({$user}, {$pwd})";
    }
}