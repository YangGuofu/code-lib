<?php

namespace src\builder;


class Mysql implements ModelInterface
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
        $columns = implode(',', $this->columns);
        $where = "id = {$this->where}";
        return "select {$columns} from {$this->database} where {$where}";
    }
}