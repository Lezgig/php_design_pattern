<?php

namespace App\Entity;

use App\Entity\Car;

class Prius extends Car
{
    public function cost(){
        return 3000;
    }

    public function speed(){
        return 100;
    }
}