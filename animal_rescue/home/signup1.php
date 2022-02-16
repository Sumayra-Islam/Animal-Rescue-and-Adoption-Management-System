<html>
<head>
<title>SIGN UP Form</title>  
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
</head>
<body>

<div class="form-box">
    
    <h2>SIGN UP</h2>
    <form action="registration.php" method="POST">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="uname" placeholder="Type Name">
        </div>
        
        <div class="input-group">
         <label>Email</label>
         <input type="email" name="email" placeholder="Type Email">
        </div>
     
        <div class="input-group">
            <label>Phone no</label>
            <input type="text" name="phone_no" placeholder="Phone number">
        </div>
            <div class="input-group">
         <label>Password</label>
             <input type="password" name="password" placeholder="Password">
        </div>
         
        <button type="submit">Submit</button>
            
             
         
         
         <p> Already a user?<a href ="logas.php"><b>log in</b></a></p>
         
        
    </form>  
    
   
</div>
    
    
</body>
</html>