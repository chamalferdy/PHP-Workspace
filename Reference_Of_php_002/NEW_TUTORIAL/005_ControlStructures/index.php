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

    // If elseif else
    $bool = true;
    $a = 1;
    $b = 4;

    if ($a < $b) {
        echo "First condition is true!";
//        if ($a < $b && $bool) {
//            echo "Second condition is true!.";
//        }
    } else if ($a < $b && $bool) {
        echo "Second condition is true!";
    } else{
        echo "None of the conditions were true!";
    }
    ////////////////////////////

    // Switch case
    switch ($a)
    {
        case 1:
            echo "The first case is correct!";
            break;
        case 2:
            echo "The second case is correct!";
            break;
        case 3:
            echo "The second case is correct!";
            break;
        default:
            echo "None of the conditions were true!";
    }
    ////////////////////////////

    // Match Case
    $result = match($a){
        1,3,5 => "Variable a is equal to one!",
        2 => "Variable a is equal to two!",
        default => "None were a match",
    };

    echo $result;

    ?>
</body>

</html>