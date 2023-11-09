<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];

    try {
        require_once "dbh.inc.php";

        // Using the nameparameters.
        $query = "INSERT INTO users (username,pwd,email) VALUES (:username,:pwd,:email);"; // After preparing the query we can bind the user data to these name parameters.
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $username); // nameparameter,userdata.
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();
        $pdo = null;
        $stmt = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
