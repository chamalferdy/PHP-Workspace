<?php
include "extra.php";
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
    $person1 = new Person("Chamal", "Black", 23);
    echo $person1->getName();
    // static property are not a part of the object we are willing to create.

    // echo $person1->$drinkingAge;
    // We can access the static property without having to create an object first.
    echo Person::$drinkingAge . "<br>";
    Person::setDrinkingAge(18);
    echo Person::$drinkingAge . "<br>";
    Person::setDrinkingAge(21);
    echo $person1->getDA();
    ?>
</body>

</html>