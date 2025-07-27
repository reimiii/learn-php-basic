<?php

$name = "John"; // Global scope variable

function sayHello()
{
    // Access global variable using 'global' keyword
    global $name;
    echo "Using global keyword: $name" . PHP_EOL;

    // Access global variable using $GLOBALS superglobal
    echo "Using \$GLOBALS superglobal: " . $GLOBALS["name"] . PHP_EOL;
}

sayHello();
