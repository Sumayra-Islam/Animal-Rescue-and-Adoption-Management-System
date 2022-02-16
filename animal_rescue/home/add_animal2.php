<?php
    

    if(isset($_POST['type']) && isset($_POST['age']) && isset($_POST['location']) && isset($_POST['date'])  && !empty($_POST['type']) && !empty($_POST['age']) && !empty($_POST['location']) && !empty($_POST['date'])  ){
        
        $var1=$_POST['type'];
        $var2=$_POST['age'];
        $var3=$_POST['date'];
        $var5=$_POST['location'];
        
          if(isset($_FILES['pimage'])){
                $var=$_FILES['pimage'];
                ///print_r($var4);
                move_uploaded_file($var['tmp_name'],"image/$var1.jpg");
            }
            
        
        session_start();
        $var4=$_SESSION['email'];
        try{
           
            $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
          
            
            $query="INSERT INTO rescue_table(animal_type,age,rescue_date,location_name,image) VALUES('$var1','$var2','$var3','$var5','image/$var1.jpg')";  
            
            try{
               
                $dbcon->exec($query);
                
                 $q="SELECT employee_id FROM employee WHERE email='$var4'";
           
                $val= $dbcon->query($q);
                $r=$val->fetch();
                $emp_id=$r[0];
                
                $q1="SELECT animal_id FROM rescue_table WHERE rescue_date='$var3'";   
                $val1= $dbcon->query($q1);
                $r1=$val1->fetch();
                $an_id=$r1[0];
                
                $q3="INSERT INTO employee_rescue_table VALUES($emp_id,$an_id)";
                try{
                    $dbcon->exec($q3);
                }
                 catch(PDOException $ex){
              
                ?>
                    <script>window.location.assign('add_animal.php')</script>
                <?php
            }
                
                ?>
                    <script>window.location.assign('rescue_animal.php')</script>
                <?php
            }
            catch(PDOException $ex){
              
                ?>
                    <script>window.location.assign('add_animal.php')</script>
                <?php
            }
            
             
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('add_animal.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('../logas.php')</script>
    
        <?php
        
    }
?>