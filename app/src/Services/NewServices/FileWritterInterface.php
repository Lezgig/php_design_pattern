<?php

namespace App\Services\NewServices;

interface FileWritterInterface
{
    /**
     * Write content to a file
     *
     * @param string $filename
     * @param string $content
     * @return string
     */
    public function writeToFile(string $filename, string $content): string;
}