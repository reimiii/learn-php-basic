<?php

// Indexed array of names
$names = ["Noir", "Carter", "Smith"];

// Classic for loop with index
echo "=== Using for loop ===" . PHP_EOL;
for ($i = 0; $i < count($names); $i++) {
    // Printing element by index
    echo "Data at index $i = $names[$i]" . PHP_EOL;
}

// Foreach with index
echo "=== Using foreach with index ===" . PHP_EOL;
foreach ($names as $index => $name) {
    // Printing index and value
    echo "Data at index $index = $name" . PHP_EOL;
}

// Foreach without index
echo "=== Using foreach without index ===" . PHP_EOL;
foreach ($names as $name) {
    // Printing value only
    echo "Name value: $name" . PHP_EOL;
}

// Associative array representing a person
$person = [
    "first_name" => "Noir",
    "middle_name" => "Carter",
    "last_name" => "Smith",
];

// Foreach for associative array
echo "=== Iterating over associative array ===" . PHP_EOL;
foreach ($person as $key => $value) {
    // Printing key and corresponding value
    echo "Key: $key, Value: $value" . PHP_EOL;
}
