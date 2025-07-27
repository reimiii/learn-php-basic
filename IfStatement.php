<?php

$score = 70;
$attendance = 90;

// Standard if-elseif-else syntax
if ($score >= 80 && $attendance >= 80) {
    echo "Your Grade is A" . PHP_EOL;
} elseif ($score >= 70 && $attendance >= 70) {
    echo "Your Grade is B" . PHP_EOL;
} elseif ($score >= 60 && $attendance >= 60) {
    echo "Your Grade is C" . PHP_EOL;
} elseif ($score >= 50 && $attendance >= 50) {
    echo "Your Grade is D" . PHP_EOL;
} else {
    echo "Your Grade is E" . PHP_EOL;
}

// Alternative syntax with colons and endif
if ($score >= 80 && $attendance >= 80):
    echo "Your Grade is A" . PHP_EOL;
elseif ($score >= 70 && $attendance >= 70):
    echo "Your Grade is B" . PHP_EOL;
elseif ($score >= 60 && $attendance >= 60):
    echo "Your Grade is C" . PHP_EOL;
elseif ($score >= 50 && $attendance >= 50):
    echo "Your Grade is D" . PHP_EOL;
else:
    echo "Your Grade is E" . PHP_EOL;
endif;
