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
	<div class="header">
		<ul>
             <a href="home.php"><b><p style="color:red;"></p>HOME</b></a>
			
            <a href="profile1.php">profile</a>
             <a href="changepassword.php">changepassword</a>
             <a href="confirmdlt.php">Delete you account</a>
            <br>
          
           
            
			<li><a href="animal.php">Apply for adoption</a></li>
            <br>
        
           
		</ul>

		<div class="user_info">
			Logged in as <?php echo "$email";?>
            <a href="logout.php">Logout</a>
	       </div>
	</div>
	
</body>
</html>