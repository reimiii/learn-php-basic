<?php

// Function with typed parameters and typed return value
function sum(int $first, int $second): int
{
    // Sum the two integers
    $total = $first + $second;
    return $total;
}

// Call sum() and print the result
$result = sum(10, 10);
var_dump($result); // int(20)

$result = sum(100, 100);
var_dump($result); // int(200)

// Function with conditional return and typed return type
function getFinalValue(int $value): string
{
    // Determine grade letter based on score range
    if ($value >= 80) {
        return "A";
    } elseif ($value >= 70) {
        return "B";
    } elseif ($value >= 60) {
        return "C";
    } elseif ($value >= 50) {
        return "D";
    } else {
        return "E";
    }

    // This line will never execute because function always returns above
    echo "Unreachable line" . PHP_EOL;
}

// Call getFinalValue() with different scores and print the result
$score = getFinalValue(90);
var_dump($score); // string(1) "A"

$score = getFinalValue(30);
var_dump($score); // string(1) "E"
