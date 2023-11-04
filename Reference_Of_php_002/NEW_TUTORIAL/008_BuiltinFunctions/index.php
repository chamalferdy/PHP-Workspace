<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InBuiltFunctions</title>
</head>

<body>

    <?php
    // String

    $string = "Hello World!";
    echo strpos($string, "o");
    echo "<br>";
    echo strpos($string, "Wo");
    echo "<br>";
    echo str_replace("World", "Chamal", $string);
    echo "<br>";
    echo strtolower($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo substr($string, 2, 2);
    echo "<br>";
    echo substr($string, 2, -2);
    echo "<br>";
    print_r(explode(" ", $string)); // echo will give an error as this will give an array.

    // Math related
    $number = -5.5;
    echo abs($number);
    echo "<br>";
    echo round($number);
    echo "<br>";
    echo pow(2, 3);
    echo "<br>";
    echo rand(1, 100);
    echo "<br>";
    echo sqrt(2);
    echo "<br>";

    // Array Related

    $array = ["Apple", "Banana", "category"];

    echo count($array);

    echo "<br>";
    echo is_array($array);
    echo "<br>";
    array_push($array, "kiwi");
    print_r($array);
    echo "<br>";
    array_pop($array);
    print_r($array);
    echo "<br>";
    print_r(array_reverse($array));
    echo "<br>";

    $array1 = ["Apple", "Banana", "category"];
    $array2 = ["kiwi"];
    print_r(array_merge($array1, $array2));
    echo "<br>";

    echo date("Y-m-d H:i:s");
    echo time(); // since a date from a history january 1st 1970.

    $date = "2023-04-11 12:00:00";
    echo strtotime($date);

    ?>
</body>

</html>