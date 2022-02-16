
<?php
  if(isset($_POST['name'])&&isset($_POST['user_id'])&&isset($_POST['an_id'])&&isset($_POST['date'])&&isset($_POST['account_id'])&&!empty($_POST['name'])&&!empty($_POST['user_id'])&&!empty($_POST['an_id'])&&!empty($_POST['date'])&&!empty($_POST['account_id'])){
      
      $name=$_POST['name'];
      $acc_id=$_POST['account_id'];
      $amount=$_POST['date'];
      $user_id=$_POST['user_id'];
      $an_id=$_POST['an_id'];
      try{
          $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
          $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
          $query="INSERT INTO payment(payment_date,animal_id,Usersid) VALUES('$amount',$an_id,$user_id)";
          try{
              $dbcon->exec($query);
              
             
               ?>

                 <script> alert("payment succesfully");window.location.assign("animal.php")</script>
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
