<?php

// includes is public for the demonstration purposes.

// if (isset($_POST["submit"])) {
// }
// not the best way to do .


// var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // will be vulnerable to users to hack.
    /**
     * So you have to make sure that you have to sanitize your data every single time. Never trust data that is submitted by user.
     * You always need to sanitize data that user was able to submit. 
     */
    $firstname = htmlspecialchars($_POST["firstname"]);
    // htmlspecialchars() - take data and convert to html entities.no longer inject code inside the fields inside our form.
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);
    // htmlentities();

    if (empty($firstname)) {
        // exit();
        header("Location: ../index.php");
    }
    // eventhough the html tags can include the attribute "require" it's not secure at all.This way is more secure.

    echo "These are the data, that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
    echo "<br>";

    header("Location: ../index.php"); // moving user back to the front page.
} else {
    header("Location: ../index.php");
}
