<?php

// Standard for loop: incrementing from 1 to 10
for ($counter = 1; $counter <= 10; $counter++) {
    echo "This is for loop iteration-$counter" . PHP_EOL;
}

// Standard for loop: decrementing from 10 to 1
for ($counter = 10; $counter >= 1; $counter--) {
    echo "This is for loop iteration-$counter" . PHP_EOL;
}

// Alternative syntax with colon and endfor (incrementing)
for ($counter = 1; $counter <= 10; $counter++):
    echo "This is for loop iteration-$counter" . PHP_EOL;
endfor;

// Alternative syntax with colon and endfor (decrementing)
for ($counter = 10; $counter >= 1; $counter--):
    echo "This is for loop iteration-$counter" . PHP_EOL;
endfor;
