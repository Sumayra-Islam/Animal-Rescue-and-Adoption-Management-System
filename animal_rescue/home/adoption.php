<!DOCTYPE html>
<html>
<head>
    <title>adoption</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>


	<form action="adoptform.php" method="POST">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>adoption</h1>
					<p>Fill up the form.</p>
					<hr class="mb-3">
					
                    <br>
                     <label for="animal type"><b>choose animal</b></label>
                     <select name="animal_type" id="animal_id">
                    <option value="">select your favourite animal</option>
                    <option value="cat">cat</option>
                    <option value="dog">DOG</option>
                    <option value="parrot">Parrot</option>
                    <option value="moyna">Moyna</option>

                    </select>
                    <br>
                    <label for="image"><b>Image</b></label>
					<input class="form-control" id="image"  type="file" name="image" required>
					<br>
                   <label for="cost"><b>adoption cost</b></label>
					<input class="form-control" id="costid"  type="text" name="costid" required>
					<br>
                     
                   <label for="age"><b>age</b></label>
					<input class="form-control" id="age"  type="text" name="age" required>
					<br>
					
        
                    
                     <label for="payment_status"><b>payment status</b></label>
                     <select name="payment" id="payment">
    <option value="">payment yet?</option>
    <option value="yes">yes</option>
    <option value="no">no</option>
    
    
                    </select>
<br>
                    
                  <hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="submit">
				</div>
			</div>
		</div>
	</form>


</body>
</html>
