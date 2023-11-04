<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $fruits = array("Apple", "Banana", "Cherry"); // you can put a , at the end of the items. It is called as a trailing comma.
    $fruits = ["Apple" /*0*/, "Banana", "Cherry"];
    $test = ["Pears","Strawberry"];

    echo $fruits[1];
    echo "<br>";

    $fruits[] = "Orange";
    echo $fruits[3];
    echo "<br>";

    $fruits[1] = "Orange";
    echo $fruits[1];
    echo "<br>";

//    unset($fruits[1]);
//    echo $fruits[1];
    echo "<br>";

    array_splice($fruits,0,1);
    echo $fruits[1];
    echo "<br>";

    array_splice($fruits,2,0,"Mango");
    print_r($fruits);
    echo "<br>";

    array_splice($fruits,2,0,$test);
    print_r($fruits);
    echo "<br>";
    // Associative Arrays
    $tasks = [
            "laundry" => "Daniel",
            "trash" => "Frida",
            "vaccum" => "Basse",
            "dishes" => "Bella"
    ];
    echo $tasks["trash"];
    echo "<br>";

    print_r($tasks);
    echo "<br>";

    echo count($tasks);
    echo "<br>";

    echo sort($tasks); // sorted by ascending alphabetically.
    echo "<br>";
    print_r($tasks); // give as an index array not an associative array.
    echo "<br>";

    $vegetables = ["gurkin","sweetpotatos","potatoes","onions"];
    array_push($vegetables,"Spinach"); // only for index arrays.
    print_r($vegetables);
    echo "<br>";

    $tasks["dusting"] = "perry";
    print_r($tasks);
    echo "<br>";
////////////////////
    // Multi-dimensional Arrays
    $food =[
            array("apple","mango"),
        "banana",
        "cherry"
    ];
    echo $food[0][0];
    echo "<br>";

    $foods = [
            "fruits" => array("apple","banana","cherry"),
        "meat" => array("chicken","fish"),
        "vegetables" => array("cucumber","carrot"),
    ];
    echo $foods["vegetables"][0];
    ?>
</body>

</html>