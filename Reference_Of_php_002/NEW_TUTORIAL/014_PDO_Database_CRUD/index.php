<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Signup</h2>
    <form action="includes/foamhandler.inc.php" method="post">
        <!--when u want to grab data from a database then we  use get method.-->
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>SignUp</button>
    </form>
</body>

</html>