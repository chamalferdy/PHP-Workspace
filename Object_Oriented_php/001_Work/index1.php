<?php
include 'includes/newclass.inc.php';
include '001_visibility.php';
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
    $animal1 = new Animal();
    $person1 = new Person();
    $child1 = new Child();
    $pet1 = new Pet();

    //echo $person1->name . "<br>";
    echo $person1->civilStatus . "<br>";
    echo $person1->info() . "<br>";
    echo $child1->childinfo() . "<br>";
    //
    echo $animal1->info() . "<br>";
    echo $pet1->petinfo() . "<br>";
    echo $pet1->name;
    //
    // $obj2 = new Person(); // can't access.
    // echo $obj2->age;

    ?>
</body>

</html>