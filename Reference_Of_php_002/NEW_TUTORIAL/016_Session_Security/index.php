<?php
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>



<?php
/**
 * In session security we are mainly concerned about make sure that other users or the computers are not able to steal our session data. So the Session ID cookie inside our browser should only match up with the ID inside the server for us. If another user out there hijack our session ID, then they can actually go in and steal our sessoin data. So the session ID security is a must. 
 * 
 * Session ID Hijacks - Session ID Sniffing, Session ID Prediction, Session fixation(Sending a malicious link to a website they included the session ID for their computer end), Cross Side Scripting Attack(Trying to inject javascript into your website to steal your cookies for example).
 * 
 * It's a good practice that whenever you have anything to do with sessions it's very important to always validate and sanitize user data. Make sure not to include any kind of sensitive data inside a session variable. 
 * 
 * Security vs Convinience of user.
 * 
 * session use only cookies - make sure that any session ID can only pass using session cookies and not by using the url of your website.
 */
?>