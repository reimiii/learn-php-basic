<?php

$name = "Noir Carter Smith";

// Concatenation using . and PHP_EOL for newline
echo "Name: " . $name . PHP_EOL;
echo "Value: " . 100 . PHP_EOL;

// Type casting from int to string
$valueString = (string) 100;
var_dump($valueString); // string(3) "100"

// Type casting from string to int
$valueInt = (int) "100";
var_dump($valueInt); // int(100)

// Type casting from string to float
$valueFloat = (float) "1.01";
var_dump($valueFloat); // float(1.01)

// String indexing (0-based)
$name = "Noir";
echo $name[0] . PHP_EOL; // N
echo $name[1] . PHP_EOL; // o
echo $name[2] . PHP_EOL; // i

// Concatenation vs interpolation
echo "Hello " . $name . ", welcome to PHP learning" . PHP_EOL;
echo "Hello $name, welcome to PHP learning" . PHP_EOL;

// Curly braces for parsing variable inside string
$var = "Noir";
echo "This is {$var}s" . PHP_EOL; // This is Noirs
