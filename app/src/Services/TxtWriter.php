<?php

namespace App\Services;

class TxtWriter extends FileWriter
{

    public function write($path): bool
    {
        echo PHP_EOL . "Writing a txt file : $path";
        return true;
        
    }
}