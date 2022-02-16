<?php 
session_start();

// connects to the database
$mysqli = new mysqli("localhost", "root", "","animal_rescue");

$query = "SELECT name, curr_location, phone_no,email FROM users WHERE email = '".$_SESSION['email']."'";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"left\">";
        echo "<br /><b><i>My Profile</i></b> :<br />";
         echo "<div align=\"center\">";
        echo "<b>Name:</b> ". $row['name'];
        echo "<br /><b>Location:</b> ".$row['curr_location'];
        echo "<br /><b>Phone Number::</b> ".$row['phone_no'];
        echo "<br /><b>Email:</b> ".$row['email'];
        echo "</div>" ;  
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
     <a href="home.php"><b><p style="color:red;"></p>HOME</b></a>
    </body>
</html>