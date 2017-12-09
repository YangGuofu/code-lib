<?php

namespace src\simpleFactory;


class Bike implements VehicleInterface
{
    public function drive()
    {
        print "Bike drive \n";
    }
}