<?php
include 'otherWork.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            background: black;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Hey there! this is one of my simple web pages.</h1>
    <?php
    $person1 = new Person("Chamal", "Black", 21); // constructor and destructor both will run when created the class object.
    // $person2 = new Person();
    // echo $person1->name . "<br>";
    // echo $person1->eyeColor . "<br>";
    // echo $person1->name . "<br>";
    $person1->setName("Brandon");
    echo $person1->getName() . "<br>";
    echo $person1->getAge() . "<br>";
    echo $person1->getEyeColor() . "<br>";
    ?>
</body>

</html>