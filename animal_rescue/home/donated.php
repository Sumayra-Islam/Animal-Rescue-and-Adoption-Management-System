<?php
  if(isset($_POST['name'])&&isset($_POST['account_id'])&&isset($_POST['amount'])
    &&!empty($_POST['name'])&&!empty($_POST['account_id'])&!empty($_POST['amount'])){
      
      $name=$_POST['name'];
      $acc_id=$_POST['account_id'];
      $amount=$_POST['amount'];
      
      try{
          $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
          $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $query="INSERT INTO donation(user_name,account_number,amount) VALUES('$name','$acc_id','$amount')";
          try{
              $dbcon->exec($query);
              
             
               ?>

                 <script> alert("donated succesfully");window.location.assign("donation.php")</script>
                 <?php
              
          }
              catch(PDOExeption $ex){ 
          ?>

     <script>window.location.assign("home.php")</script>
     <?php
          
      }
          
      }
      catch(PDOExeption $ex){
          
          ?>

     <script>window.location.assign("home.php")</script>
     <?php
          
      }
  }
  else{
      ?>

     <script>window.location.assign("home.php")</script>
     <?php
  }


?>