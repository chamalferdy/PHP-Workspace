<?php
//variable = reusable container that holds data.
// string , integer , float , boolean.

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Strings \\
$name = "Chamal";
echo $name . "<br>";
$food = "pizza";
$email = "fakemail@gmail.com";
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// integers \\
$age = 80;
echo $age . "<br>";
$users = 2;
$quantity = 3;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// floats \\
$gpa = 3.4;
$price = 4.33;
$tax_rate = 6.7;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// boolean \\
$employed = true;
$online = false;
$for_sale = true;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$total = null; // we can assign a value later on.


echo "Hello {$name}!<br> how are you?<br>"; // string literals.
echo "You like {$food}<br>";
echo "Your email is {$email}<br>";

echo "You are {$age} years old<br>";
echo "there are {$users} users online <br>.";
echo "Would you like to but {$quantity} items? <br>";

echo "Your gpa is {$gpa}! <br>";
echo "Your price is \${$price} <br>"; // To output the $ sign using an escape sequence.
echo "The sales tax rate is : {$tax_rate}% <br>";

echo "Online status: {$online} <br>"; // true - 1, false output nothing.
echo "Are you employed ? : {$employed} <br>";
echo "Your total is : \${$total}<br>";

echo "You have ordered {$quantity}x{$food}s<br>";
$total = $quantity * $price;
echo "Your total is : \${$total}<br>";
