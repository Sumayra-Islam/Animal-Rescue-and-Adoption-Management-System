<?php
session_start();

$email=$_SESSION['email'];


$servername = "localhost";
$username = "root";
$password1="";
$dbname = "animal_rescue";



$conn = new mysqli($servername, $username, $password1, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "delete from users where 
email='$email' ";

if ($conn->query($sql) === TRUE) {
  printf('<b>account delete Successfully</b><br><a href="home.php">Go to home </a>');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>	
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    
    </body>
</html>