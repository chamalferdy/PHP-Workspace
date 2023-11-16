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

$age = 25;
$citizen = true;

if ($age >= 18 && $citizen) {
    echo "You can vote";
} else {
    echo "You cannot vote";
}

$child = true;
$senior = false;
$ticket = null;

if ($child || $senior) {
    $ticket = 10;
} else {
    $ticket = 15;
}

echo "The ticket price is \${$ticket}";
