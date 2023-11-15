<?php

$pwdSignup = "Krossing";

$options = [
    'cost' => 12
];

password_hash($pwd, PASSWORD_DEFAULT);
$hashedPwd =  password_hash($pwdSignup, PASSWORD_BCRYPT, $options); //recommended


$pwdLogin = "Krossing";


if (password_verify($pwdLogin, $hashedPwd)) {
    echo "They are the same!";
} else {
    echo "They are not the same!";
}
