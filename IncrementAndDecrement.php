<?php

$a = 10;

// Pre-increment
$b = ++$a;
var_dump($a); // int(11)
var_dump($b); // int(11)

$a = 10;

// Post-increment
$b = $a++;
var_dump($a); // int(11)
var_dump($b); // int(10)

$a = 10;

// Pre-decrement
$b = --$a;
var_dump($a); // int(9)
var_dump($b); // int(9)

$a = 10;

// Post-decrement
$b = $a--;
var_dump($a); // int(9)
var_dump($b); // int(10)
