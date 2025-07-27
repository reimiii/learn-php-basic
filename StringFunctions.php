<?php

// join() combines array elements into a string using a separator
var_dump(join(",", [10, 11, 12, 13, 14, 15]));
// Output: string(17) "10,11,12,13,14,15"

// explode() splits a string into an array using a delimiter
var_dump(explode(" ", "John Alexander Smith"));
// Output: array(3) { [0]=> string(4) "John" [1]=> string(9) "Alexander" [2]=> string(5) "Smith" }

// strtolower() converts a string to lowercase
var_dump(strtolower("JOHN ALEXANDER SMITH"));
// Output: string(21) "john alexander smith"

// strtoupper() converts a string to uppercase
var_dump(strtoupper("john alexander smith"));
// Output: string(21) "JOHN ALEXANDER SMITH"

// trim() removes whitespace from the beginning and end of a string
var_dump(trim("     john    alexander   "));
// Output: string(21) "john    alexander"

// substr() returns a portion of a string starting from index 0 with length 4
var_dump(substr("John Alexander Smith", 0, 4));
// Output: string(4) "John"
