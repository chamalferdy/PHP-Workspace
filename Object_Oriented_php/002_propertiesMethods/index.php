<?php
require 'other.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $name = "chamal";
    // $eyecolor = "Black";
    // $age = 21;

    $person1 = new Person();
    $person1->setName("chamal");
    echo $person1->name;

    $person2 = new Person();
    $person2->setName("Ferdy");
    echo $person2->name;
    ?>
</body>

</html>