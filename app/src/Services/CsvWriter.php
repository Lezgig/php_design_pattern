<?php 

namespace App\Services;

class CsvWriter extends FileWriter
{
    public function write($path): bool
    {
        echo PHP_EOL . "Writing a csv file : $path";
        return true;
        
    }
}