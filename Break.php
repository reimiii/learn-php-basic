<?php

$counter = 1;

// Infinite loop using while(true)
while (true) {
    // Print current iteration
    echo "This is while loop iteration-$counter" . PHP_EOL;

    // Increment counter
    $counter++;

    // Break condition to exit the loop after 10 iterations
    if ($counter > 10) {
        break; // Exit the loop
    }
}
