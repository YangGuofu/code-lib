<?php
namespace src\singleton;


class SubSingleton extends Singleton
{
    public function getName()
    {
        return __CLASS__;
    }
}