<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $name = "Daniel";
    echo $_SERVER["DOCUMENT_ROOT"];
    // information about the root path.
    // will give C:/xampp/htdocs as result.
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"]; // localhost
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"]; // GET or POST
    echo $_GET["name"]; // used to submit data from a form.
    // All the data inside the URL is going to be accessds as an associative array.
    // we have bunch of data labels 
    echo $_POST["Age"]; // submitting the data that data is not seen for outside.
    echo $_REQUEST["Age"]; // this method will going to look at GET,POST AND COOKIES when it comes to looking for data inside website.
    echo $_FILES["name"]; // will used for get data about a file that has been uploaded to the server.We can get information about file sie etc.
    // Ex : the files we are uploading inorder to complete a html form.
    echo $_COOKIE["name"];
    //  Cookie is a small file that a server embedds on a users computer.
    $_SESSION["username"] = "Krossing";
    echo $_SESSION["username"];
    // grab data from inside a session. work for cookies as well.

    $_ENV["password"]; // environment variable
    // These are very sensitive data. These should not be accessible to users or other environments.



    // General rule for GET and POST
    /*
    GET - when you want to show something to the user inside a page. 
    POST - whenever you submitting data and allow user to submit data. 
    */
    ?>

</body>

</html>