<?php

$firstName = "Noir";
$lastName = "Weston";

// Anonymous function using `use` to capture variables from outer scope
$anonymousFunction = function () use ($firstName, $lastName): string {
    return "Anonymous Function: Hello $firstName $lastName" . PHP_EOL;
};

// Arrow function implicitly captures variables from outer scope (no `use` needed)
$arrowFunction = fn() => "Arrow Function: Hello $firstName $lastName" . PHP_EOL;

// Output results
echo $anonymousFunction(); // Output: Anonymous Function: Hello Noir Weston
echo $arrowFunction(); // Output: Arrow Function: Hello Noir Weston
