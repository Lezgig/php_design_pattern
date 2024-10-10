<?php

namespace App\Services\NewServices;

use App\Services\NewServices\TxtFileWriter;

class Adapter{
    
    public function __construct(private TxtFileWriter $textFileWriter)
    {
        
    }

    public function write($filename, $content): string
    {
        return $this->textFileWriter->writeToFile($filename, $content);
    }
}