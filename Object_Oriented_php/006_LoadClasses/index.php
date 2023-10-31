<?php
include "includes/autoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p id="pid"></p>
    <script>
        document.getElementById("pid").innerHTML = 3 + 9;
    </script>
</body>

</html>