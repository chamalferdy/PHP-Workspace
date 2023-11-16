<?php
// array = "variable" which can hold more than one value at a time.

$foods = array("apple", "orange", "banana", "coconut");

// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";
// echo $foods[4] . "<br>"; // There is no element for this index.

$foods[0] = "pineapple";
array_push($foods, "pineapple", "dragonfruit"); // will add elements to the end of the array.
array_pop($foods); // remove the last element from the array.
array_shift($foods); // shift array elements by one place removing the first element of the array.
$rev_foods = array_reverse($foods);
echo count($foods) . "<br>";
foreach ($rev_foods as $rev_food) {
    echo $rev_food . "<br>";
}

// naming convention - variable name to be the singular form of array name.
foreach ($foods as $food) {
    echo $food . "<br>";
}
