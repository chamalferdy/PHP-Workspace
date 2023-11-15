<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1); // make sure that the website only use the session ID that has actually been created by our server inside the website. (Mandatory)

// Cookie Parameters for the created session in order to enhance the security of those cookies.
session_set_cookie_params([
    'lifetime' => 1800, // lifetime for a cookie.
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    /** only using https connection. */
    'httponly' => true
    /** Go to the website and restrict any sort of script access from our client means us inside the browser */
]);

session_start();

// session_regenerate_id(true); 
// Get a better version of ID that session_start() created.

// Regenerating this session ID periodically inside the website will enhance the security much more.
/**
 * Bcz lets say an attacker was able to obtain a session ID of your session, then by regenerating the ID will no longer work for the previous ID after a certain amount of time.
 */

if (!isset($_SESSION['last_regeneration'])) {
    session_regenerate_id(true);
    session_create_id(); // Take this ID and combine with the userID from inside the database inorder to create a unique ID for login session for an example.
    $_SESSION['last_regeneration'] = time();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regeneration'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }
}
// Regenerate the ID inside the session every 30 minutes.

// https://www.php.net/manual/en/features.session.security.management.php
// https://www.php.net/manual/en/session.security.ini.php
// https://acrosssecurity .com/papers/session_fixation.pdf