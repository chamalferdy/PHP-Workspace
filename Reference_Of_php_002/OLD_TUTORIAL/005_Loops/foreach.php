<?php

$array = ["Daniel", "Timmy", "Chamal"];

foreach ($array as $value) {
    echo $value; //$value is referencing inside the array
}

//assosiative array.
$array1 = [
    "Name" => "Chamal",
    "Eyecolor" => "Blue"
];

foreach ($array1 as $key => $value) {
    echo $key . ": " . $value;
    // first loop = Name : Chamal
    //second loop = Eyecolor : Blue
}
