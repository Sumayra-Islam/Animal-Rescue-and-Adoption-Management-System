<?php

$animal_type=$_POST['animal_type'];
$cost=$_POST['costid'];
$payment_status=$_POST['payment'];
$age=$_POST['age'];

 if(isset($_FILES['pimage'])){
                $var=$_FILES['pimage'];
                ///print_r($var4);
                move_uploaded_file($var['tmp_name'],"image/$animal_type.jpg");
            }

$servername = "localhost";
$username = "root";
$password1="";
$dbname = "animal_rescue";



$conn = new mysqli($servername, $username, $password1, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO adoption_table (animal_type, adoption_cost, payment_status,age,image)
VALUES ('$animal_type','$cost','$payment_status','$age','image/$animal_type.jpg')";

if ($conn->query($sql) === TRUE) {
  printf('<b> </b><br><a href="showadoptanimal.php"><button class="ui inverted red basic button"; style="background:red">show adopt animal</button><a href="upload.php"><button class="ui inverted red basic button"; style="background:red">update </button>
  <br></a><br><a href="userhome.php"></a><button class="ui inverted red basic button"; style="background:red">Go to home</button></a>');
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
