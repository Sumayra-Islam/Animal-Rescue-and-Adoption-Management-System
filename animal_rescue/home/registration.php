<?php
    

    if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['phone_no']) &&
       isset($_POST['password']) && !empty($_POST['uname']) && !empty($_POST['email']) &&
       isset($_POST['phone_no'])  && !empty($_POST['password']) ){
        
        $var1=$_POST['uname'];
        $var2=$_POST['email'];
        $var3=$_POST['phone_no'];
        $var4=md5($_POST['password']); 
        
        try{
           
            $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $query="INSERT INTO employee(name,email,phone_no,password) VALUES('$var1','$var2','$var3','$var4')";  
            
            try{
               
                $dbcon->exec($query);
                
              
                ?>
                    <script>window.location.assign('admin.php')</script>
                <?php
            }
            catch(PDOException $ex){
              
                ?>
                    <script>window.location.assign('signup1.php')</script>
                <?php
            }
            
        }
        catch(PDOException $ex){
            ?>
                <script>window.location.assign('signup1.php')</script>
            <?php
        }
    }
    else{
        ?>
            <script>window.location.assign('signup1.php')</script>
    
        <?php
        
    }
?>