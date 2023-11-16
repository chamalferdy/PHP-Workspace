<?php

// associative array = An array made of key => value pairs.
// ex : countries => capitals
//      id => username
//      item => price

$capitals = array("USA" => "Washington D.C.", "Japan" => "Tokyo", "South Korea" => "Seoul", "India" => "New Delhi");

echo $capitals["USA"] . "<br>";
echo $capitals["Japan"] . "<br><br>";

$capitals['USA'] = "Las Vegas";
$capitals['China'] = "Beijing";
$capitals['Russia'] = "Moscow";
//
// use the following functions one by one commenting those.
array_pop($capitals);
foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}
echo "<br>";
array_shift($capitals);
foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}
echo "<br>";
$keys = array_keys($capitals);
foreach ($keys as $key) {
    echo "{$key} <br>";
}
echo "<br>";
$values = array_values($capitals);
foreach ($values as $value) {
    echo "{$value} <br>";
}
echo "<br>";
$capitals = array_flip($capitals);
foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}
echo "<br>";
$capitals = array_reverse($capitals);
foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}
echo count($capitals);
echo "<br>";
