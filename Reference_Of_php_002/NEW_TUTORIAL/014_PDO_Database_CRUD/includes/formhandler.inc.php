<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    // We won't use htmlspecialcharacter to sanitize the data since this is not outputting data into the browser.

    //echo htmlspecialchars($username); // in this case we have to sanitize the data since we are outputting data into the browser. If not that's not secure and we won't do it at this point.

    try {
        require_once "dbh.inc.php";
        /**
         * require - samething as include but instead of warning it will give a failed error.
         * require_once - samething as include but instead of warning it will give a failed error.
         * include - includes a file. If can't find the file it will give a warning.
         * include_once - same thing as include but check the file is already been included.
         */

        $query = "INSERT INTO users (username,pwd,email) VALUES (?,?,?);"; // We won't include the variable names inside the parantheses of values since it can cause SQL injection attacks hence we will put ? as a placeholder.(Without using name parameters, Name parameters has been done in the foamhandler.inc.php file separately).
        // Later on we can bind the user data to the query after we submitted the query.

        // Creation of the prepared statement inorder to query this query inside the database table.
        $stmt = $pdo->prepare($query); // submitting the query to the database. The Query will run inside the database.

        $stmt->execute([$username, $pwd, $email]); // providing the data that the user submitting. 
        // after that finishing of this script. Order have to be matched with the columns in the query.

        $pdo = null;
        $stmt = null; // free up the resources. Manually closing but this will be done automatically. It's a best practice to do.
        header("Location: ../index.php");

        //exit(); // If you are just closing out the script, that doesn't have any sort of connection running use exit().
        // If you are running that has some connection inside of it use die();
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
