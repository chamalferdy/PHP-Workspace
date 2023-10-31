<?php
include "other.php";
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
    $obj1 = new NewClass();
    unset($obj1); // to delete the created object.
    $obj1->setNewProperty("Property1");
    $obj1->getProperty();
    $obj1->info();
    ?>
</body>

</html>