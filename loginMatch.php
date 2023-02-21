<?php
$servername = "phpMyAdmin";
$username = "username";
$password = "password";
$database = "lliguiv1_new data";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>
