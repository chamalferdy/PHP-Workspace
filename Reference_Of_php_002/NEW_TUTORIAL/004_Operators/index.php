<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>
    <?php
    // String operator

    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;
    echo $c;
    echo "<br>";
    ///////////////////

    // arithmetic operator
    echo 1 + 3;
    echo "<br>";
    echo 3 ** 9;
    echo "<br>";
    echo 2 + 9 % 4;
    echo "<br>";
    //////////////////

    // Assignment operator
    $a = 3;
    // $a = $a + 9;
    $a += 9;
    echo $a;
    echo "<br>";
    ////////////////////

    // Comparison operator
    $a = 4;
    $b = "9";
    if ($a === $b) {
        echo "This statement is true";
        echo "<br>";
    } else {
        echo "This statement is not true";
    }

    if ($a <> $b) {
        echo "<br>";
        echo "This statement is true {$a} and {$b} are not equal";
    }
    /////////////////////////////

    // Logical Operators
    $c = 2;
    $d = 5;
    if ($a == $b and $c == $d) {
        echo "This statement is true!";
    }
    if ($a == $b or $c == $d) {
        echo "This statement is true!";
    }

    if ($a == $b || $c == $d && $a == $c) {
        echo "This statement is true!";
    }
    ////////////////////////////

    // Increment/Decrement Operators
    $a = 1;
    $b = 9;
    echo ++$a;
    echo $b--;
    echo $b;
    ?>
</body>

</html>