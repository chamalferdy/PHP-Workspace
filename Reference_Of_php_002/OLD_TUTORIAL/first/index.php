<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Without escaping -->
    <?php
    if (1 == 1) {
        echo "hey there. This is a php statement.";
    }
    ?>

    <!-- With escaping -->
    <?php if (1 == 1) { ?>
        <p>This is a paragraph! </p>
    <?php } ?>

    <?php
    // this is a single line comment .
    /* This is a multi-line comment .*/
    ?>
</body>

</html>