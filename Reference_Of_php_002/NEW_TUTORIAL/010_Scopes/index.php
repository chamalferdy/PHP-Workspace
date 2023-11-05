<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $test = "Daniel"; // global variable

    echo $test . "<br>";

    function myFunction()
    {
        global $test;
        // Define a local variable - locally scoped within the function.
        $localVar = "Hey there ";

        // Use the local variable 
        return $localVar . $test; // Output: Hello, world!
    }

    echo myFunction() . "<br>";
    // echo $localVar;
    //////////////////////////////////

    $supglob = "Chamal Fernando";
    function myFunction1()
    {
        $localExample = "Hello There!";
        return $GLOBALS['supglob']; // output: Chamal Fernando.
    }

    echo myFunction1() . "<br>";
    ?>
</body>

</html>