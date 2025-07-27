<?php

// Function that receives a callback parameter of type callable
function sayHello(string $name, callable $filter)
{
    // Execute the callback using call_user_func
    $finalName = call_user_func($filter, $name);

    // Print the result after the filter is applied
    echo "Hello (after filter): $finalName" . PHP_EOL;
}

// Using built-in functions as callback
sayHello("Noir", "strtoupper"); // Output: Hello (after filter): NOIR
sayHello("Noir", "strtolower"); // Output: Hello (after filter): noir

// Using anonymous function as callback
sayHello("Noir", function (string $name): string {
    return strtoupper($name);
}); // Output: Hello (after filter): NOIR

// Using arrow function as callback
sayHello("Noir", fn($name) => strtoupper($name)); // Output: Hello (after filter): NOIR
