<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Programmerzamannow\BelajarPhpComposerHello\Customer("Akbar");

echo $customer->sayHello("") . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;