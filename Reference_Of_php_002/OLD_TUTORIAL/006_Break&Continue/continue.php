<?php
$a = 1;

while ($a < 10) {
    $a++;
    if ($a === 5) {
        continue; //skipping the 5th iteration.can give a parameter for the continue in case of nested statements.
    }
    echo $a;
}
