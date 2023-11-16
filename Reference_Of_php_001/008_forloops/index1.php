<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index1.php" method="post">
        <label for="">Enter a number to count down from:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>

</html>

<?php
$counter = $_POST['counter'];

for ($i = 0; $i <= $counter; $i++) {
    echo $i . "<br>";
}

echo "<br>";

for ($i = $counter; $i > 0; $i--) {
    echo $i . "<br>";
}
?>