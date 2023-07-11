<?php

$num1 = 23;
$num2 = 4;
$sum = 0;

//arithmetic operators
$finals = $num1 + $num2;
$finals = $num1 - $num2;
$finals = $num1 / $num2;
//
$finals = $num1 * $num2;
// etc.

// assignment operators
$num3 = 9;
$num3 += $num2;
//above is same as
$num3 = $num3 + $num2;


// comparison operaotor.
$num1 == $num2;
$num1 === $num2;
//
$num1 != $num2;
$num1 !== $num2;
$num1 < $num2;
$num1 <= $num2;
$num1 > $num2;
$num1 >= $num2;
$num1 <=> $num2;
//  one on the left is greater than the right - will return 1.
//  one on the right is greater than the left - will return -1.
//  one on the left is equal to the right - will return 0.

$num4 = 1;
$num5 = "2";
$num4 == $num5;
$num4 === $num5; // checking the number as well as the data type.

// logical operators.
$num2 = 10;
$num1 = 5;
$num1 === 5 && $num2 === 10;
$num1 === 5 and $num2 === 10;

$num2 = 13;
$num1 = 6;
$num1 === 6 || $num2 === 13;
$num1 === 6 or $num2 === 13;

$num2 = 10;
$num1 = 5;
$num1 === 5 xor $num2 === 10;

$num1 = 7;
!$num1 === 9;

// Increment / Decrement
$num1 = 5;
++$num1; // will output 6
$num1++; // will output 5

$num1 = 5;
++$num1; // will output 4
$num1++; // will output 5

// String operator
$a = "My name ";
$b = "is Daniel!";
$c = $a . $b; //string conctenation.

$c = "My name ";
$d = $c . "is Chamal!";
