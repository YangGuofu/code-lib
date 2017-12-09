<?php

namespace src\simpleFactory;


class Car implements VehicleInterface
{
    public function drive()
    {
        print "Car drive \n";
    }
}