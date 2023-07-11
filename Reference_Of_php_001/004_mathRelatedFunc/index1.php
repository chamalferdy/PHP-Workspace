<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index1.php" method="post">
        <label for="">x : </label>
        <input type="text" name="x">
        <label for="">y : </label>
        <input type="text" name="y">
        <label for="">z : </label>
        <input type="text" name="z">
        <input type="submit" name="" id="" value="total">
    </form>
</body>

</html>

<?php
$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;
// $total = abs($x); // absolute value.
#skjfdlsajkfjsl
// $total = round($x); //round function.
// can use round function to a specific no of digits to round off. Ex :- round($x,3);(upto 3 digits.)
// $total = floor($x); // floor function.
// $total = ceil($x); // ceil function
// $total = pow($x, $y);
// $total = max($x, $y, $z);
// $total = min($x, $y, $z);
// $total = pi();
$total = rand(1, 6); // can set a minimum and maximum of a specific range.



echo $total;
?>