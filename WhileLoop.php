<?php

$counter = 1;
while ($counter <= 10) {
    echo "This is while loop iteration-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10):
    echo "This is while loop iteration-$counter" . PHP_EOL;
    $counter++;
endwhile;
