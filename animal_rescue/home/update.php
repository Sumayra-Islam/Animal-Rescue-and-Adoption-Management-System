<?php session_start(); ?>

//<?php
//if(!isset($_SESSION['valid'])) {
	
//}
//?>

<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	
	$animal_id =  $_POST['animal_id'];
    $animal_type = $_POST['animal_type'];
	$adoption_cost = $_POST['adoption_cost'];
	$payment_status= $_POST['payment_status'];	
    $age =  $_POST['age'];
	
    
    
    
    	
	
	// checking empty fields
	if(empty($animal_type) || empty($adoption_cost) || empty($payment_status) || empty($age)) {
				
		if(empty($animal_type)) {
			echo "<font color='red'> field is empty.</font><br/>";
		}
		
		if(empty($adoption_cost)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
		
		if(empty($payment_cost)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}
        		if(empty($age)) {
			echo "<font color='red'>field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE adoption_table SET animal_type='$animal_type', adoption_cost='$adoption_cost', payment_cost='$payment_cost' , age='$age' WHERE animal_id=$animal_id");
		
		//redirectig to the display page. In our case, it is view.php
		header("Location: view.php");
	}
}
?>
<?php
//getting id from url
$animal_id = $_GET['animal_id'];

//selecting data associated with this particular id
//$result = mysqli_query($mysqli, "SELECT animal_id FROM adoption_table WHERE animal_id = '$animal_id'");

//while($res = mysqli_fetch_array($result))
//{
    
    //$animal_type = $_res['animal_type'];
	//$adoption_cost = $_res['adoption_cost'];
	//$payment_status= $_res['payment_status'];	
    //$age =  $_res['age'];
	
    
    
    
	
//}
?>
