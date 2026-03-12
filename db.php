<?php

$host = "localhost";
$username = "rsoa_rsoa340_40";
$password = "123456";
$database = "rsoa_rsoa340_40";  // ⚠️ IMPORTANT CHANGE

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database Connection Failed");
}

?>
