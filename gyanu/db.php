<?php
$host = "localhost";   // database server
$user = "root";        // your MySQL username
$pass = "";            // your MySQL password (empty in XAMPP)
$db   = "tguide";      // your database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// If everything is ok
// echo "Connected Successfully!";
?>
