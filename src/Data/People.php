<?php

namespace Programmerzamannow\BelajarPhpComposer\Data;

class People
{
    public function __construct(Private string $name)
    {
        
    }

    public function sayHello(string $name)
    {
        echo "Hello $name, My name is $this->name";
    }
}