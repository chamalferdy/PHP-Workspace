<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // for loop
    $test = 5;
    for ($i = 0; $i <= 10; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }


    for ($i = 1; $i < $test; $i++) {
        echo "This is iteration number " . $i . "<br>";
    }

    $boolean = true;
    // while loop
    while ($test < 10) {
        echo $test . "<br>";
        // echo $boolean . "<br>";
        $boolean = false;
        $test++;
    }

    // do while loop
    $test = 10;
    do {
        echo $test . "<br>"; // test will echo out one time.
        $test++;
    } while ($test < 10);

    // foreach loop
    $fruits = array("Apple", "Banana", "Orange"); // index array

    $fruits1 = array("Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange");

    echo $fruits[0] . "<br>";
    echo $fruits[1] . "<br>";
    echo $fruits[2] . "<br>";

    foreach ($fruits1 as $fruit => $color) {
        echo "This is a " . $fruit . ", that has a color of " . $color . "<br>";
    }

    ?>
</body>

</html>