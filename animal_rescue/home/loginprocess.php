<?php 
session_start(); 
include "config.php";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email= validate($_POST['email']);
	$password = validate($_POST['password']);

	if (empty($email)) {
		header("Location: user.php?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: user.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
            	$_SESSION['phone_no'] = $row['phone_no'];
            	
            	header("Location:home.php");
		        exit();
            }else{
				header("Location: user.php?error=Incorect email or password");
		        exit();
			}
		}else{
			header("Location: user.php?error=Incorect email or password");
	        exit();
		}
	}
	
}else{
	header("Location: user.php");
	exit();
}