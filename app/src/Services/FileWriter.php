<?php

namespace App\Services;

abstract class FileWriter
{

    protected $path;

    public function __construct()
    {
        $this->path = 'app/src/Files/';
    }

    protected function write($path) :bool
    {
        return true;
    }

}