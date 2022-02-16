<?php
session_start();

$email=$_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <label for="confirm"><b>confirm to delete your profile?</b></label>
    <br>
    <li><a href="delete.php">YES</a></li> <li><a href="userhome.php">NO</a></li>
    </body>
</html>