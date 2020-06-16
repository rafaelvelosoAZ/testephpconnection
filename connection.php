<?php
$servername = "mysqlnew.mysql.database.azure.com";
$username = "rafael";
$password = "Spfc33671234567";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
