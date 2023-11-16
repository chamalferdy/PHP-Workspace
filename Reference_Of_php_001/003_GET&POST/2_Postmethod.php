<!-- 
$_GET , $_POST =   special variables(super global variables) used to collect data from an HTML form 
                   data is sent to the file  in the action attribute of <form> <form action = "some_file.php" method="get">
                    
$_GET =  Data is appended to the url
            NOT SECURE
            char limit 
            Book mark is possible w/ values 
            GET requests can be cached
            Better for a search page

$_POST = Data is packaged inside the body of the HTTP request 
            MORE SECURE
            No data limit 
            Cannot bookmark 
            GET requests are not cached 
            Better for submitting credentials 

-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Postmethod.php" method="post">
        <label>username : </label><br>
        <input type="text" name="username"><br>
        <label>password : </label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>

</html>

<?php
echo $_POST["username"] . "<br>";
echo "{$_POST["password"]} <br>";
// post is more secure than the get method.Sensitive methods doesn't append to the url.
?>