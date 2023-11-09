<?php

// This is basically getting the connection with the database.
// dbh.inc.php - databasehandler.includes.php
// dsn - data source name
$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

// There are 3 ways to connect to a sql database.
/**
 * 1. MySQL connection (very bad and not recommended).
 * 2. mysqli connection (mysql improved will do some extra sql injection prevention).
 * 3. PDO - Php Data Object.(More flexible.Useful for other types of relational database other than mysql).
 */

// PDO - Php Data Object to create a connection between a database. A database connection Object.
try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Prepared Statement Workflow
// We send in the query we write, So the SQL code. We send that to the database first and then afterwards we bind data submitted by the user then send that to the database afterwards.
// We separate the query from the data that will be submitted.
// Because of this separation the sql code doesn't have an impact on the query that we have write inside our php code.
