<?php
require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

$log->warning('Foo');
$log->error('Bar');

$log->warning('Memory 1 '.memory_get_usage());

phpinfo();

$log->warning('Memory 2 '.memory_get_usage());
