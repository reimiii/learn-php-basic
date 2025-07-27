<?php

$grade = "B";

// Standard switch-case
switch ($grade) {
    case "A":
        echo "You passed with excellence" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "You passed" . PHP_EOL;
        break;
    case "D":
        echo "You did not pass" . PHP_EOL;
        break;
    default:
        echo "You might be in the wrong major" . PHP_EOL;
}

// Alternative syntax with colon and endswitch
switch ($grade):
    case "A":
        echo "You passed with excellence" . PHP_EOL;
        break;
    case "B":
    case "C":
        echo "You passed" . PHP_EOL;
        break;
    case "D":
        echo "You did not pass" . PHP_EOL;
        break;
    default:
        echo "You might be in the wrong major" . PHP_EOL;
endswitch;
