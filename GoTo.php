<?php

// Goto statement: jump directly to label "a", skipping "Hello World"
goto a;

echo "This line is skipped and never executed: Hello World" . PHP_EOL;

a:
// Target label for the first goto
echo "Label A reached using goto: Hello A" . PHP_EOL;

// Initialize counter
$counter = 1;

// Infinite loop with manual break using goto
while (true) {
    // Printing current iteration
    echo "This is while loop iteration-$counter" . PHP_EOL;
    $counter++;

    // Jump to 'end' label when counter exceeds 10
    if ($counter > 10) {
        goto end;
    }
}

end:
// Label used to break out of the loop
echo "Loop ended using goto" . PHP_EOL;
