<?php
// Connecting to MySQL

// Declaring variables for the server and database
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "landing";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected Sucessfully";

?>
