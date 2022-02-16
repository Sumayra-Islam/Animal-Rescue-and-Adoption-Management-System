<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>


	<form action="payment.php" method="POST">
		Name:<input type="text" name="name"><br><br>
        User ID:<input type="text" name="user_id"><br>
        Animal ID:<input type="text" name="an_id"><br>
        Date:<input type="date" name="date"><br>
<!--
         <label for="account">Choose:</label>				 
    <select name="account" id="id">
    <option value="">want to payment by</option>
    <option value="bkash">bkash</option>
    <option value="rocket">rocket</option>
    <option value="dutchbangla">Dutchbangla</option>
    <option value="visa">visa</option>
        </select><br>
-->
        Account Number:<input type="text" name="account_id"><br><br>
       
        
        <input type="submit" value="Enter">
       
	</form>


</body>
</html>
