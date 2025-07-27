<?php

// Assigning value to $name
$name = "Noir";

// Creating a reference $otherName to $name (both point to same memory)
$otherName = &$name;

// Changing $otherName will also change $name since it's a reference
$otherName = "Me";

// Output: "Me"
echo $name . PHP_EOL;

// Function that takes parameter by reference
function increment(int &$value)
{
    // Increments the original variable passed (not a copy)
    $value++;
}

$counter = 1;
increment($counter); // $counter is passed by reference, becomes 2

// Output: 2
echo $counter . PHP_EOL;

// Function returning a reference to a static variable
function &getValue()
{
    static $value = 100; // This variable persists across calls
    return $value; // Returning reference to $value
}

// $a is a reference to the static variable inside getValue()
$a = &getValue();
$a = 200; // Modifies the static variable to 200

// $b also refers to same static variable, reflects updated value
$b = &getValue();
echo $b . PHP_EOL; // Output: 200
