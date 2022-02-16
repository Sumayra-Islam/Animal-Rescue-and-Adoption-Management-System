<?php
  session_start();
   if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
       ?>
     <title>Change Password</title>  
    <form action="change_password.php" method="post">
     Old Password: <input type="password" name="o_pass" placeholder="Old Password"> <br>   
     Password: <input type="password" name="pass" placeholder="New Password"><br>
     Confirm password: <input type="password" name="pass2" placeholder="Confirm New Password">
      <br>   <input type="submit" value="Change" >
       <br> <a href="profile.php"><b>Back</b></a>

           
           
    </form>
        
       <?php
   }
   else{
          ?>
            <script>
                window.location.assign('admin.php');
            </script>
        <?php
        }
?>