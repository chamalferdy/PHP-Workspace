<?php

$a = 1;

while ($a <= 10) {
    if ($a === 5) {
        break;
    }
    echo $a++;
}

while ($a++) {
    echo $a;
    while ($a >= 10) {
        break 2; // break to 2 levels.By adding the optional parameter you can sure to control how many loops you want to break out of that are nested each other.
    }
}
