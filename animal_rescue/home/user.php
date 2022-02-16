


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$email=$_POST['email'];
$password=md5($_POST['password']);
$con=mysqli_connect("localhost","root","","animal_rescue");
$query="SELECT * FROM users where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
    
    echo $password;
session_start();
 if($rows==1){
 	header('location:userhome.php');
 	$_SESSION['email']=$email;
 }
else{
	echo "INVALID EMAIL AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>
	<div class="formbox">
		<h2>Login</h2>
		<form method="POST" action="user.php"><br>
			<input type="text" name="email" placeholder="Enter your email"><br>
			<input type="password" name="password" placeholder="Enter your password"><br>
			<input type="submit" value="LOGIN">   <br>
		 <a href="home.php" >Home</a>
		</form>
	</div><!--end of formbox-->
</body>
</html>