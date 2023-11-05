<?php

//
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

// PDO - Php Data Object to create a connection between a database. A database connection Object.
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
