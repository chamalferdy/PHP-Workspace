<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>

<body>
    <?php

    $bool = true;
    $a = 1;
    $b = 4;

    if ($a < $b) {
        echo "First condition is true!";
        if ($a < $b && $bool) {
            echo "First condition is true!.";
        }
    }

    ?>
</body>

</html>