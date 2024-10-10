<?php

namespace App\Services\OldServices;

class FileWriterAbstract
{
    public function write($filename, $content): string
    {
        return "$filename written successfully with content : $content";
    }
}