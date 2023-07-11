<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Activity.php" method="post">
        <label for="">Enter a radius : </label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>

</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$area = pi() * $radius * $radius;
$volume = (4 * pi() * pow($radius, 3)) / 3;

$circumference = round($circumference, 3);
$area  = round($area, 3);
$volume = round($volume, 3);

echo "The radius would be : {$radius}<br>";
echo "Circumference = {$circumference} cm <br>";
echo "Area = {$area} cm<sup>2</sup><br>";
echo "Volume = {$volume} cm<sup>3</sup><br>";

?>