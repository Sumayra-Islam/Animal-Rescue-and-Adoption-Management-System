<?php
    

    if(isset($_POST['email']) && isset($_POST['password']) 
       && !empty($_POST['email']) && !empty($_POST['password'])){
        
        $var1=$_POST['email'];
        $var2=md5($_POST['password']);
        
        try{
          
            $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
            $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $sqlquery="SELECT email FROM employee WHERE email='$var1' and password='$var2'  ";
            
            
            
            try{
                $returnval=$dbcon->query($sqlquery);
                if($returnval->rowCount()==1){
                   session_start();
                    
                    $_SESSION['email']=$var1;
                    ?>
                        <script>
                            window.location.assign('employee_details.php');
                        </script>
                    <?php
                }
                else{
                   
                    ?>
                        <script>
                            window.location.assign('admin.php');
                        </script>
                    <?php
                }
            }
            catch(PDOException $ex){
                ?>
                    <script>
                        window.location.assign('admin.php');
                    </script>
                <?php
            }
        }
        catch(PDOException $ex){
            ?>
                <script>
                    window.location.assign('admin.php');
                </script>
            <?php
        }
        
    }
    else{
        ?>
            <script>
                window.location.assign('admin.php');
            </script>
        <?php
    }
?>