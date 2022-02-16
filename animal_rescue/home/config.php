<?php


$servername = "localhost";
$username = "root";
$password1 = "";
$dbname = "animal_rescue";

$conn = mysqli_connect($servername, $username, $password1, $dbname);

if (!$conn) {
	echo "Connection failed!";
}