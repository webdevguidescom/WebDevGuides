<?php

$servername = "ls-69e6.eu-west-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "EL[Rx";
$database = "wdg";

 $email1 = $_POST["email"];



    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // SQL query to increment the like count '" . $email1 . "'";
    $sql = "INSERT INTO emails (email)
    VALUES('" . $email1 . "')";

echo $sql;
$conn->query($sql
echo $sql;

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Like count updated successfully.";
    } else {
        echo "Error updating like count: " . $conn->error;
    }




// Redirect the user (use absolute URLs)
 header("Location: /php/php-5.php", true, 301);

// Close the database connection
$conn->close();

?>