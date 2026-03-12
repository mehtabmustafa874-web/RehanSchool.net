<?php
$host = "localhost";
$user = "rsoa_rsoa340_40";
$pass = "123456";
$db   = "rehanschool_clone";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
