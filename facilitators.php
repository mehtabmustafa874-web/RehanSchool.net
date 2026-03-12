<?php
include 'db.php';
$result = $conn->query("SELECT * FROM facilitators");
?>
<!DOCTYPE html>
<html>
<head>
<title>Facilitators</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{margin:0;font-family:Arial;background:#fffdf5;}
header{background:linear-gradient(90deg,#ff9800,#ffc107);padding:15px;text-align:center;}
nav a{margin:0 15px;text-decoration:none;color:black;font-weight:bold;}
.section{padding:60px;text-align:center;}
.card{background:white;width:320px;margin:20px auto;padding:25px;border-radius:10px;box-shadow:0 5px 15px rgba(0,0,0,0.1);}
.role{color:#ff9800;font-weight:bold;margin:10px 0;}
h2{color:#ff5722;}
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
<h2>Our Facilitators</h2>

<?php
while($row = $result->fetch_assoc()){
    echo "<div class='card'>";
    echo "<h3>".$row['name']."</h3>";
    echo "<div class='role'>".$row['role']."</div>";
    echo "<p>".$row['bio']."</p>";
    echo "</div>";
}
?>

</div>

</body>
</html>
