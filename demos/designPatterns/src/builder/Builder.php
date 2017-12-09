<?php

namespace src\builder;


class Builder
{
    private $model;

    public function __construct(ModelInterface $model)
    {
        $this->model = $model;
    }

    public function select($columns)
    {
        $this->model->columns = $columns;
        return $this;
    }

    public function where($value)
    {
        $this->model->where = $value;
        return $this;
    }
    public function getSql()
    {
        return $this->model->getSql();
    }
}