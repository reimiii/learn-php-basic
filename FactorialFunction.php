<?php

// Factorial using loop
function factorialLoop(int $value): int
{
    $total = 1;

    // Multiply all numbers from 1 to $value
    for ($i = 1; $i <= $value; $i++) {
        echo "Loop iteration $i: $total * $i = " . $total * $i . PHP_EOL;
        $total *= $i;
    }

    return $total;
}

// Example: 5! = 1 × 2 × 3 × 4 × 5 = 120
echo "Factorial Loop Result:" . PHP_EOL;
var_dump(factorialLoop(5)); // int(120)

echo "Manual multiplication: 1 * 2 * 3 * 4 * 5 = ";
var_dump(1 * 2 * 3 * 4 * 5); // int(120)

// Factorial using recursion with debug output
function factorialRecursive(int $value): int
{
    echo "Calling factorialRecursive($value)" . PHP_EOL;

    // Base case
    if ($value == 1) {
        echo "Reached base case: return 1" . PHP_EOL;
        return 1;
    } else {
        // Recursive case: n * (n-1)!
        echo "Computing: $value * factorialRecursive(" .
            ($value - 1) .
            ")" .
            PHP_EOL;
        $result = $value * factorialRecursive($value - 1);
        echo "Result of factorialRecursive($value) = $result" . PHP_EOL;
        return $result;
    }
}

echo "Factorial Recursive Result:" . PHP_EOL;
var_dump(factorialRecursive(5)); // int(120)

// Recursive loop to demonstrate deep call stack
function loop(int $value)
{
    if ($value == 0) {
        // Base case: end the recursion
        echo "End loop" . PHP_EOL;
    } else {
        // Recursive call
        echo "Loop-$value" . PHP_EOL;
        loop($value - 1);
    }
}

// WARNING: The following will cause stack overflow if value too large
// PHP recursion limit ~1000 by default
// Uncomment to test safely with smaller values

// echo "Demonstrating recursive countdown:" . PHP_EOL;
// loop(10);
