<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userSearch = $_POST['usersearch'];

    try {
        require_once "includes/dbh.inc.php";

        $query = "SELECT * FROM comments WHERE username=:usersearch;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":usersearch", $userSearch);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // Will fetch as associative arrays.

        $pdo = null;
        $stmt = null;

        // header("Location: ../index.php");
        // die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <section>
        <h2>Search Results:</h2>
        <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no Results!</p>";
            echo "<div>";
        } else {
            // var_dump($results);
            foreach ($results as $row) {
                echo "<div>";
                echo "<h3>" . htmlspecialchars($row["username"]) . "</h3>" . "<br>";
                echo "<p>" . htmlspecialchars($row["comment_text"]) . "</h3>" . "<br>";
                echo "<p>" . htmlspecialchars($row["created_at"]) . "</h3>" . "<br>";
                echo "</div>";
            }
        }
        ?>
    </section>
</body>

</html>