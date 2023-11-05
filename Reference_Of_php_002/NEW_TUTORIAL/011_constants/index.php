<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "chamal";
    $name = "Basse";
    echo $name . "<br>";

    define("PI", 3.14); // naming convension for constants - all capitalize letters.
    //define("PI", 4.14);  // can't redefine a constant.
    echo PI . "<br>";

    define("NAME", "Daniel");
    define("IS_ADMIN", true);
    echo NAME . "<br>";
    echo IS_ADMIN . "<br>";

    // We can pass the constants inside the user defined functions.

    function test()
    {
        echo PI;
    }

    test();
    // constants will be defined at the beginning/top of the code.

    ?>
</body>

</html>