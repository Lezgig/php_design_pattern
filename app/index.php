<?php

$autoloader = dirname(__DIR__) . '/vendor/autoload.php';

if(!file_exists($autoloader)){
    echo('create the src directory in /app & run composer dump-autoload');
    exit;
}else{
    include $autoloader;
}

?>
