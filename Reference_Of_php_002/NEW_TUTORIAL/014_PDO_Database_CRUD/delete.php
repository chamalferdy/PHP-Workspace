<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>
    <h2>Delete Account</h2>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Delete</button>
        <!-- <div>
            <p>Back to the home page</p>
            <button><a href="index.php">Home</a></button>
        </div> -->
    </form>
</body>

</html>