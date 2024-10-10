<?php
require __DIR__ . '/vendor/autoload.php';

use App\Services\NewServices\TxtFileWriter;
$fileWriter = new TxtFileWriter();
$newFileWriter = new \App\Services\NewServices\Adapter($fileWriter);
$content = $newFileWriter->write('hello.txt', 'Hello, World!');
echo $content;
?>