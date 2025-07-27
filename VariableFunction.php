<?php

// Basic function definitions
function foo()
{
    echo "Executing foo()" . PHP_EOL;
}

function bar()
{
    echo "Executing bar()" . PHP_EOL;
}

// Variable function: calling a function using a string variable
$functionToCall = "foo";
$functionToCall(); // Calls foo()

$functionToCall = "bar";
$functionToCall(); // Calls bar()

// Function that accepts a name and a callback function (filter)
function sayHello(string $name, $filter)
{
    // Call the passed function on $name
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

// Custom function to prepend "Sample" to a name
function sampleFunction(string $name): string
{
    return "Sample $name";
}

// Calling sayHello() with different filters
sayHello("Noir", "sampleFunction"); // Output: Hello Sample Noir
sayHello("Noir", "strtoupper"); // Output: Hello NOIR
sayHello("Noir", "strtolower"); // Output: Hello noir
