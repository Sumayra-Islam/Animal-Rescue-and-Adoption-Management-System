<!DOCTYPE html>
<html>
<head>
    <title>User Registration | PHP</title>
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style1.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>


	<form action="insert.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form.</p>
					<hr class="mb-3">
					<label for="name"><b> Name</b></label>
					<input class="form-control" id="name" type="text" name="name" required>
                    <br>

					
					<label for="email"><b>Email</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>
                    <br>

					<label for="phone_no"><b>Phone Number</b></label>
					<input class="form-control" id="phone_no"  type="text" name="phone_no" required>
                     <br>
                    
                    <label for="curr_location_name"><b>current location</b></label>
                   <!-- <input class="form-control" id="curr_location"  type="text" name="curr_location" required>  !-->
                    
                    
                    <select name="curr_location" id="location_id">
    <option value="">select your location</option>
    <option value="gulsan">Gulsan</option>
    <option value="mirpur">Mirpur</option>
    <option value="badda">Badda</option>
    <option value="shahbag">Shahbag</option>
    <option value="tejgaon">Tejgaon</option>
    <option value="uttora">Uttora</option>
                    </select>
                    <br>

                 <label for="password"><b>password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
                     <br>

					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>


</body>
</html>
