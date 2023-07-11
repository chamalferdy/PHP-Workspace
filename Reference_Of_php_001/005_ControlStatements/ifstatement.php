<?php

// if statement = if some condition is true, do something. if condition is false, don't do it.

$age = 21;
if ($age >= 18) {
    echo "you may enter this site";
} elseif ($age == 0) {
    echo "You were just born";
} else {
    echo 'You must be 18+ to enter';
}
