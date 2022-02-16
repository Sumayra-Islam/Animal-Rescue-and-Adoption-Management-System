<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="home.php">Home</a> | <a href="animal.php">show updated animal</a> | <a href="logout.php">Logout</a>
	<br/><br/>
	
	<form action="update.php" method=" post"> 
     
     
         <label for="animal_type"> animal_type </label>
         <input type=" name" name=" animal_type">
     
     
     
         <label for="adoption_cost"> adoption_cost</label>
         <input type=" text" name=" adoption_cost">
     
     
    
         <label for ="payment_status"> payment_status</label>
             <input type="text" name ="payment_status">
         
         
         
         <label for ="age"> age:</label>
             <input type="text" name ="age">
         
        
             <label for ="animal_id"> animal id</label>
        <input type="number" name=animal_id>
			
				<input type="submit" name="Update" value="Update">
          </form>
     
   
         
         
         
        		
	
</body>
</html>