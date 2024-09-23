<?php
// Database connection details
$servername = "localhost";  // Corrected the variable name
$username = "root";
$password = "";
$dbname = "teenzee";

// Creating connection
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "welcome";
?>
