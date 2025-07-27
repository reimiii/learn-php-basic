<?php

$first = [
    "first_name" => "Noir",
];

$last = [
    "first_name" => "Alex",
    "last_name" => "Smith",
];

// Union: keys from the left array are preserved
$full = $first + $last;
var_dump($full);
// Expected:
// array(2) {
//   ["first_name"]=> string(4) "Noir"
//   ["last_name"]=> string(5) "Smith"
// }

$a = [
    "first_name" => "Noir",
    "last_name" => "Smith",
];

$b = [
    "last_name" => "Smith",
    "first_name" => "Noir",
];

var_dump($a == $b); // true: values and keys are equal, order doesn't matter
var_dump($a === $b); // false: order matters for identity comparison
