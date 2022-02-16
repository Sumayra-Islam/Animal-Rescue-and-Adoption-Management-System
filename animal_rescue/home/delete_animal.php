<?php
  if($_GET['id']){
      $var1=$_GET['id'];
      
     
     try{
             $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
           $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
         $query="DELETE FROM employee_rescue_table where animal_id='$var1'";
          $sqlquery="DELETE FROM rescue_table where animal_id='$var1' ";
         
        try{
            $dbcon->exec($query);
             $dbcon->exec($sqlquery);
                
              
                ?>
                    <script>window.location.assign('rescue_animal.php')</script>
                <?php
            
        }
         catch(PDOException $ex){
     echo "Error deleting record1...";
      }
     }   
      catch(PDOException $ex){
    echo "Error deleting record2...";
      }
  }
  else{
      echo "Error deleting record3...";
  }



?>