<?php

$shouldCreate = true;

// Conditional function declaration
if ($shouldCreate) {
    // Function will only be defined if condition is true
    function sayHello()
    {
        // This will be executed when the function is called
        echo "Hello Function" . PHP_EOL;
    }
}

// Function calls
// Since $shouldCreate is true, sayHello() is now defined
sayHello(); // Output: Hello Function
sayHello(); // Output: Hello Function
sayHello(); // Output: Hello Function
sayHello(); // Output: Hello Function
sayHello(); // Output: Hello Function
