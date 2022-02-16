<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone_no=$_POST['phone_no'];
$curr_location=$_POST['curr_location'];
$password=md5($_POST['password']);



$servername = "localhost";
$username = "root";
$password1="";
$dbname = "animal_rescue";



$conn = new mysqli($servername, $username, $password1, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (name,email,phone_no,curr_location,password)
VALUES ('$name','$email','$phone_no','$curr_location','$password')";

if ($conn->query($sql) === TRUE) {
  printf('<b>sign up Successfully</b><br><a href="user.php"><button class="ui inverted red basic button"; style="background:red">log in</button></a><br><a href="home.php"><button class="ui inverted red basic button"; style="background:red">Go to home</button></a>');
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