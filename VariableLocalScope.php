<?php

function createName()
{
    $name = "John"; // Local scope variable
}

createName();

// Trying to access $name outside its scope (will raise error or output nothing)
echo $name . PHP_EOL;
