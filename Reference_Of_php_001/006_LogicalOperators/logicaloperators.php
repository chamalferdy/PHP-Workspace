<?php

// Logical Operators = combine conditional statements 
// if(condition1 && condition2)


// && = True if both conditions are true
// || = True if atleast one condition is true
//  ! = True if false. False if true.

$temp = 25;

if ($temp >= 0 || $temp <= 30) {
    echo "The weather is good.";
} else {
    echo "The weather is bad.";
}

if ($temp < 0 || $temp > 30) {
    echo "The weather is bad.";
} else {
    echo "The weather is good.";
}
