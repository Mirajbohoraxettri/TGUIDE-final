<?php
include "db.php";  // include connection

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registered Successfully!";
} else {
    echo "Error: " . $conn->error;
}
?>
 
 
