<?php

namespace App\Controllers;

use App\Services\CsvWriter;

class CsvController
{
    public function __construct(private CsvWriter $csvWriter)
    {
        
    }

    public function write($path)
    {
        return $this->csvWriter->write($path);
    }
}