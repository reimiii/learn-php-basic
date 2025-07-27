<?php

// Sample data array
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Map: multiply each value by 10
$dataResult = array_map(fn(int $value) => $value * 10, $data);
echo "Mapped array (each element * 10):" . PHP_EOL;
var_dump($dataResult);

// Sort descending
rsort($data);
echo "Sorted array descending:" . PHP_EOL;
var_dump($data);

// Get keys from numeric array
echo "Array keys (numeric array):" . PHP_EOL;
var_dump(array_keys($data));

// Get values from numeric array
echo "Array values (numeric array):" . PHP_EOL;
var_dump(array_values($data));

// Associative array
$person = [
    "first_name" => "Noir",
    "last_name" => "Walker",
];

// Get keys from associative array
echo "Array keys (associative array):" . PHP_EOL;
var_dump(array_keys($person));

// Get values from associative array
echo "Array values (associative array):" . PHP_EOL;
var_dump(array_values($person));
