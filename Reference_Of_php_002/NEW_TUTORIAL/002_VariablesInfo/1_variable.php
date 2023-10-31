<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $firstName = "First ";
    $lastName = "Last";
    $fullName = $firstName . $lastName;
    echo $fullName;
    /////////////////
    // scalar data types.(contains one value)
    $string = "Daniel";
    $strdefault = "";
    $int = 342342;
    $intdefault = 0;
    $float = 45.34;
    $floatdefault = 0.0;
    $boolean = true;
    $booldefault = false;

    $name = ""; // default for string
    // array types
    $array = array("Daniel", "chamal", "Greeta");
    $arraydef = [];
    $names = ["lsjf", "aljs", "asl"];

    $name1 = "chamal";
    // object types
    // $object = new Car();
    $objdefault = null;
    ?>
    <p>Hi! My name is <?php echo $name1 ?>, and I'm learning PHP!</p>
</body>

</html>