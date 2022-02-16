<?php
  session_start();
   if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
       ?>
     <title>employee details</title>  
    <a href="profile.php"><b>Profile</b></a>
    <hr>
     <a href="rescue_animal.php"><b>Rescue animal info</b></a>
     <hr>
     <a href="adoption.php"><b>Adotable animal info</b></a> 
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