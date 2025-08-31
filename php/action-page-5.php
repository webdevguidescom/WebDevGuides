<?php

$servername = "ls-69e6.eu-west-2.rds.amazonaws.com";
$username = "dbmasteruser";
$password = "EL[Rx";
$database = "wdg";





if(!isset($_COOKIE['not_unique55'])) {
    setcookie('not_unique55', '1', time() + (86400 * 30)); //30 days

    // Establish database connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // SQL query to increment the like count
    $sql = "UPDATE likes SET count = count + 1 WHERE ID = 5";

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Like count updated successfully.";
    } else {
        echo "Error updating like count: " . $conn->error;
    }
}



// Redirect the user (use absolute URLs)
// header("Location: https://computersciencex.com/pages/free-content.php", true, 301);

// Close the database connection
$conn->close();

?>