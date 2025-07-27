<?php

// Variable $data contains a string
$data = "Noir";

// Check if $data is of type string
var_dump(is_string($data)); // true

// Check if $data is of type boolean
var_dump(is_bool($data)); // false

// Check if $data is of type integer
var_dump(is_int($data)); // false

// Check if $data is of type float/double
var_dump(is_float($data)); // false

// Check if $data is an array
var_dump(is_array($data)); // false

// Check if $data is null
var_dump(is_null($data)); // false
