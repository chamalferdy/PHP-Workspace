<?php
// if there exist only php content in a file then there will be no closing tag for that php file.
echo "hello world <br>";
echo "This is my very first php program <!DOCTYPE html> ";

// single line comment.
/*
    this is a 
    multiline
    comment. 
*/

// A php file can contain html, css and js scripts as well.

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php file</title>
</head>

<body>
    <h1>Head tag no 1</h1>
    <br>
    <p>This is a paragraph tag</p>
    <!-- with escaping -->
    <?php if (1 == 1) { ?>
        <p>YAY</p>
    <?php } ?>
    <button>Click me</button>
</body>

</html>