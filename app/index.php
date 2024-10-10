<?php

require_once __DIR__ .'/vendor/autoload.php';

use App\Controllers\TxtController;
use App\Services\TxtWriter;
use App\Controllers\CsvController;
use App\Services\CsvWriter;

$textWriter = new TxtWriter();
$csvWriter = new CsvWriter();

$cvsController = new CsvController($csvWriter);
$txtController = new TxtController($textWriter);

$txtController->write('test.txt');
$cvsController->write('test.csv');


?>
