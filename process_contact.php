<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);
    $conn->query("INSERT INTO contact_messages (name,email,message) VALUES ('$name','$email','$message')");
    header("Location: contact.php");
}
?>
