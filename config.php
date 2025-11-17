<?php
$host = "YOUR_RDS_ENDPOINT";
$user = "admin";
$pass = "YOUR_DB_PASSWORD";
$db   = "mydatabase";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
