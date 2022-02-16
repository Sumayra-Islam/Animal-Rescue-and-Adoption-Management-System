<?php 
session_start();

if (isset($_SESSION['email']) ) {

    include "config.php";

if (isset($_POST['password']) && isset($_POST['np'])
    && isset($_POST['c_np'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$password = validate($_POST['password']);
	$np = validate($_POST['np']);
	$c_np = validate($_POST['c_np']);
   // $email=$_SESSION['email'];
    
    if(empty($password)){
      header("Location: changepassword.php?error=Old Password is required");
	  exit();
    }else if(empty($np)){
      header("Location: changepassword.php?error=New Password is required");
	  exit();
    }else if($np !== $c_np){
      header("Location: changepassword.php?error=The confirmation password  does not match");
	  exit();
    }else {
    	// hashing the password
    	$password= md5($password);
    	$np =md5('np');
      $email = $_SESSION['email'];

       $sql = "SELECT password
               FROM users WHERE 
             email='$email'";
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) === 1){
        	
        	$sql_2 = "UPDATE users
        	          SET password='$np'
        	          WHERE email='$email'";
        	mysqli_query($conn, $sql_2);
        	header("Location: user.php?success=Your password has been changed successfully");
	        exit();
       }

        else {
        	header("Location: changepassword.php?error=Incorrect password");
	        exit();
       }

    }

    
}else{
	header("Location: changepassword.php");
	exit();
}

}else{
     header("Location: login.php");
     exit();
}