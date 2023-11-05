<?php

declare(strict_types=1);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserDefinedFunction</title>
</head>

<body>
    <?php
    // strlen("Daniel");
    function sayHello(string $name, string $lastname = "Deshitha")
    {
        // If you are willing to mention the type declaration explicitly then it should be done at the very beginning. Strict Type Declaration.
        return "Hello my name is " . $name . " " . $lastname . " !";
    }

    $test1 = sayHello("Chamal", "Fernando");
    // will give an error if the mentioned type wasn't there.
    echo $test1;

    $test = "Daniel";
    function calculator(int $num1, int $num2)
    {
        global $test; // to grab the variable within the global scope.
        $result = $num1 + $num2;
        return $test;
    }

    $test = calculator(2, 3);
    echo $test;
    ?>
</body>

</html>