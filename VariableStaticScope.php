<?php

function increment()
{
    static $counter = 1; // static variable retains value across function calls
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}

// Call the function multiple times
increment(); // Counter = 1
increment(); // Counter = 2
increment(); // Counter = 3
increment(); // Counter = 4
increment(); // Counter = 5
increment(); // Counter = 6
