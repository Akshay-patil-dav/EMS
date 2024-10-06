
<?php
$servername = "sql207.infinityfree.com";
$username = "if0_37391733";
$password = "3HaopZtRd6Imrw6 ";
$db = "if0_37391733_ems";
// Create connection
$conn = new mysqli($servername, $username, $password , $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>