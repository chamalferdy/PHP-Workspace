<?php
session_start();

$_SESSION["username"] = "ChamalFernando";
// unset($_SESSION["username"]); // will delete one session data.
// session_unset($_SESSION["username"]); // will delete all the session data.

session_destroy(); // will stop the session running again on the same page.
// eventhough this session_destroy() does actually purch all the session data, it doesn't get purched inside the same page. So it doesn't happen, the effect doesn't gonna happen until we actually go to another page.
// To perfectly delete the session we have to call both session_unset() and session_destroy() functions.
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_SESSION["username"];
    ?>
</body>

</html>

<?php
/**
 * SESSION - a way that website remembers information across all the pages inside the website. Ex: Shopping Cart in a E-Commerce platform.
 * 
 * These information that we want to store permenantly inside the website or atleast a longer period of time inside the website, when a user is currently using your website.
 * 
 * COOKIE - Information that stored directly inside your browser locally inside the browser not inside the server. Whenever you start a session inside a website it actually generate a session ID Cookie. It can view in the Storage tab inside the inspect tool of the web browser.Whenever that create server knows a session is going inside that particular web page and track the relevant data using that session cookie. That will be used by the server to pin point which user's data is using.
 */
?>