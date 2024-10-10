<?php

namespace App\Controllers;

use App\Services\TxtWriter;

class TxtController
{
    public function __construct(private TxtWriter $txtWriter)
    {
        
    }

    public function write($path)
    {
        return $this->txtWriter->write($path);
    }
}