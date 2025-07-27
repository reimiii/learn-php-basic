<?php

// This function is designed to be included or required in another script
// It returns a greeting message using the provided names
function sayHello(string $firstName, string $lastName): string
{
    return "Hello $firstName $lastName" . PHP_EOL;
}
