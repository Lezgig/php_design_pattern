<?php 

namespace App\Services\OldServices;

class TxtFileWriter
{
    public function write($filename, $content): string
    {
        return "$filename written successfully with content : $content";
    }
}