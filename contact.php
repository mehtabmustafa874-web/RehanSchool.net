<?php
include 'db.php';
$messageStatus="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$conn->real_escape_string($_POST['name']);
    $email=$conn->real_escape_string($_POST['email']);
    $message=$conn->real_escape_string($_POST['message']);

    if($conn->query("INSERT INTO contact_messages(name,email,message) VALUES('$name','$email','$message')")){
        $messageStatus="Message sent successfully!";
    }else{
        $messageStatus="Error occurred!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{margin:0;font-family:Arial;background:#fffdf5;}
header{background:linear-gradient(90deg,#ff9800,#ffc107);padding:15px;text-align:center;}
nav a{margin:0 15px;text-decoration:none;color:black;font-weight:bold;}
.section{padding:60px;text-align:center;}
form{max-width:500px;margin:auto;}
input,textarea{width:100%;padding:12px;margin-bottom:15px;border:1px solid #ccc;border-radius:6px;}
button{background:#ff5722;color:white;padding:12px 30px;border:none;border-radius:25px;}
.success{color:green;font-weight:bold;margin-bottom:20px;}
</style>
</head>
<body>

<header>
<nav>
<a href="index.php">Home</a>
<a href="curriculum.php">Curriculum</a>
<a href="facilitators.php">Facilitators</a>
<a href="contact.php">Contact</a>
</nav>
</header>

<div class="section">
<h2>Contact Us</h2>

<?php if($messageStatus!=""){ echo "<div class='success'>$messageStatus</div>"; } ?>

<form method="POST">
<input type="text" name="name" placeholder="Your Name" required>
<input type="email" name="email" placeholder="Your Email" required>
<textarea name="message" rows="5" placeholder="Your Message" required></textarea>
<button type="submit">Send Message</button>
</form>

</div>
</body>
</html>
