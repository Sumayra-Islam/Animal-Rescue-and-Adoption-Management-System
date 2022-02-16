<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    


<?php 
session_start();

// connects to the database
$mysqli = new mysqli("localhost", "root", "","animal_rescue");

$query = "SELECT animal_id,animal_type, adoption_cost, payment_status,age,image FROM adoption_table";
if($result = $mysqli->query($query))
{
    while($row = $result->fetch_assoc())
    {
        echo "<div align=\"left\">";
        echo "<br />animal<b><i>Profile</i></b> :<br />";
         echo "<div align=\"center\">";
        echo "<br>animal id:</b> ". $row['animal_id'];
        echo "<b>animal:</b> ". $row['animal_type'];
        echo "<br /><b>adoption_price:</b> ".$row['adoption_cost'];
        echo "<br /><b>payment status:</b> ".$row['payment_status'];
         echo "<br /><b>Age:</b> ".$row['age'];
         ?> 
  <br> <b>image</b><img width="80" height="80" alt="Image Demo" src="<?php echo $row['image'] ?>">
    <br> <a href='buy.php?'>Buy</a>;
    <?php
        echo "</div>" ;  
    }
    $result->free();
}
else
{
    echo "No results found";
}
?>
    </body>
</html>
