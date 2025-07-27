<?php

// Function with required and optional parameters
function sayHello($firstName, $lastName = "")
{
    // Print greeting message using parameters
    echo "Hello $firstName $lastName" . PHP_EOL;
}

// Calling sayHello with only first name
sayHello("Noir"); // Output: Hello Noir
sayHello("John"); // Output: Hello John
sayHello("Noir", "Carter"); // Output: Hello Noir Carter

// Function with typed parameters
function sum(int $first, int $last)
{
    // Calculate total and print
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

// Function calls with different argument types
sum(100, 100); // Valid: int + int
sum("100", "100"); // Valid: strings casted to int → 100 + 100 = 200
sum(true, false); // Valid: true → 1, false → 0 → 1 + 0 = 1

// Variadic function using ...$values
function sumAll(...$values)
{
    // Initialize total
    $total = 0;

    // Loop over each value and sum them
    foreach ($values as $value) {
        $total += $value;
    }

    // Print comma-separated values and total
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL;
}

// Array of values to be unpacked
$values = [1, 2, 3, 4, 5];

// Function calls
sumAll(1, 2, 3, 4, 5); // Output: Total 1, 2, 3, 4, 5 = 15
sumAll(...$values); // Output: Total 1, 2, 3, 4, 5 = 15
