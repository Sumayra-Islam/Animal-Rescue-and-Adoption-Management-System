<?php
  session_start();
   if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    if(isset($_POST['o_pass']) && isset($_POST['pass']) && isset($_POST['pass2']) && !empty($_POST['pass']) && !empty($_POST['pass2']) &&!empty($_POST['o_pass'])){
        
        $var1=md5($_POST['pass']);
        $var2=md5($_POST['pass2']);
        $var3=$_SESSION['email'];
        $var4=md5($_POST['o_pass']);
            
        try{
                            
            $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $query="SELECT password  FROM employee WHERE email='$var3' ";
            $val = $dbcon->query($query);
            $val1= $val->fetch();
            
            if($val1[0]==$var4){    
                    if($var1==$var2){
                        
                        $sqlquery="UPDATE employee SET password='$var2' WHERE email='$var3' ";
                            try{

                            $dbcon->exec($sqlquery);

                           ?>
                                <script>window.location.assign('admin.php')</script>
                            <?php
                        }
                        catch(PDOException $ex){

                            ?>
                                <script>window.location.assign('update_profile.php')</script>
                            <?php
                        }
                    }
                  else{
                            ?>
                                   <script>
                                       alert("Incorrect confirm password");
                                      window.location.assign('update_profile.php');
                                   </script>
                            <?php

                    }

                
          }
           else{
                 ?>
                        <script>
                             alert("Password incorrect.......try again");
                            window.location.assign('update_profile.php');
                         </script>
                    <?php
                
             
           }

        }
        catch(PDOException $ex){
              ?>
            <script>
                window.location.assign('update_profile.php');
            </script>
        <?php
            
            
        }
        
    }
    else{
       
          ?>
            <script>
              alert("Error");
                window.location.assign("update_profile.php")
            </script>
        <?php
        
        
    }
   }
   else{
          ?>
            <script>
                window.location.assign('profile.php');
            </script>
        <?php
        }
?>