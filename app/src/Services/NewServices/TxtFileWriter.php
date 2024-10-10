<?php

namespace App\Services\NewServices;

class TxtFileWriter implements FileWritterInterface
{
    public function writeToFile($filename, $content): string
    {


        return "$filename written successfully with content : $content";
    }
}