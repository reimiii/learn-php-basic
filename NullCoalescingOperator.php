<?php

$data = [
    "action" => "Create",
];

// Null coalescing operator (??):
// Returns the left-hand operand if it exists and is not null, otherwise returns the right-hand value.
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL; // Output: Create
