<?php
require('vendor/autoload.php');
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
try{
    //echo __DIR__.'/action.log';
    $log = new Logger('test');
    $log->pushHandler(new StreamHandler(__DIR__.'/action.log', Logger::INFO));
    $log->addInfo("Welcome");
}
catch(Exception $e)
{
    var_dump($e->getMessage());
}