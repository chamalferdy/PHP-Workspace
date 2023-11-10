<?php

ini_set('session.use_only_cookies', 1);
ini_set('session.use_strict_mode', 1); // make sure that the website only use the session ID that has actually been created by our server inside the website.

// Cookie Parameters
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);

session_start();
