<?php

// Loop from 1 to 100
for ($counter = 1; $counter <= 100; $counter++) {
    // Skip even numbers
    if ($counter % 2 == 0) {
        continue; // Skip the rest of the loop and go to the next iteration
    }

    // Only odd numbers will be printed
    echo "Counter: $counter" . PHP_EOL;
}
