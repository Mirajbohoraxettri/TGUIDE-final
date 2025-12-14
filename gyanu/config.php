<?php
$host = "localhost";
$user = "root"; // XAMPP default username
$pass = "";     // XAMPP default password
$db   = "user_system";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
