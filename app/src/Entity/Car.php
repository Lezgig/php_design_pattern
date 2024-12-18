<?php

namespace App\Entity;

abstract class Car {

    protected function cost(){
        return 1000;
    }

    protected function speed(){
        return 200;
    }
}