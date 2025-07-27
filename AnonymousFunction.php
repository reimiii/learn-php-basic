<?php

// Anonymous function assigned to a variable
$sayHello = function (string $name) {
    echo "Anonymous Function: Hello $name" . PHP_EOL;
};

// Calling the anonymous function
$sayHello("Noir"); // Output: Anonymous Function: Hello Noir
$sayHello("Arif"); // Output: Anonymous Function: Hello Arif

// Higher-order function accepting a callback
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName" . PHP_EOL;
}

// Pass anonymous function as argument directly
sayGoodBye("Noir", function (string $name): string {
    return strtoupper($name); // Convert to uppercase
}); // Output: Good bye NOIR

// Store anonymous function in a variable first
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Noir", $filterFunction); // Output: Good bye NOIR

// Anonymous function capturing external variables using `use`
$firstName = "Noir";
$lastName = "Weston";

$sayHelloNoir = function () use ($firstName, $lastName) {
    echo "Closure using captured variables: Hello $firstName $lastName" .
        PHP_EOL;
};
$sayHelloNoir(); // Output: Closure using captured variables: Hello Noir Weston

// Change external variables AFTER closure is created
$firstName = "John";
$lastName = "Doe";
$sayHelloNoir(); // Still uses "Noir Weston", because closure captured old values
