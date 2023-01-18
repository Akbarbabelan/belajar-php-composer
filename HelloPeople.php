<?php

require_once __DIR__ . '/vendor/autoload.php';

use Programmerzamannow\BelajarPhpComposer\Data\People;

$people = new People("Akbar");

echo $people->sayHello("Babelan") . PHP_EOL;