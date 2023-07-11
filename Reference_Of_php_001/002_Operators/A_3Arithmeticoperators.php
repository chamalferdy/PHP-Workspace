<?php

// Arithmetic Operators
// + - * / ** %
$x = 9;
$y = 3;
$z = null;
$z  = $x + $y;
echo "{$z} <br>";
$z  = $x - $y;
echo "{$z} <br>";
$z  = $x * $y;
echo "{$z} <br>";
$z = $x ** $y; // power of
echo "{$z} <br>";
$z = $x / $y;
echo "{$z} <br>";
$z  = $x % $y;
echo "{$z} <br>";

// Increment / decrement operators
// ++ , --
$counter = 0;
// $counter = $counter + 1;
$counter++;
echo "{$counter}<br>";
$counter--;
echo "{$counter}<br>";
$counter -= 3;
echo "{$counter}<br>";

// Operator Precedence
// ()
// **
// * / %
// + - 
$total = 1 + 2 - 3 * 4 / 5 ** 6;
// 1 + 2 - 3 * 4 / 15625
// 1 + 2 - 12 / 15625
// 1 + 2 - 0.000768
// 3 - 0.000768
// 2.999232.
echo $total;
