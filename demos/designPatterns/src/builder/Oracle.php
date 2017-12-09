<?php

namespace src\builder;


class Oracle implements ModelInterface
{
    public $database;
    public $sql;
    public $columns;
    public $where;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getSql(){
        return "This is oracle sql.";
    }
}