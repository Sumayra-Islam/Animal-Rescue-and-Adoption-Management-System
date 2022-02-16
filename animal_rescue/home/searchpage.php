<?php

    session_start();

    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){

        if(isset($_GET['param1']) && !empty($_GET['param1'])){
             ?> 
             <title>Search Page</title>
            <table>
                <thead>
                    <tr> 
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Phone_no</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Animal ID</th>
                    </tr>
                </thead>
                
                <tbody>
                 <?php
               try{
                            
                 $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
                 $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            
                            
                $searchval=$_GET['param1'];
                
                $sqlquery="";
                if(!empty($searchval)){
                    $sqlquery="SELECT emp.employee_id,emp.name,emp.phone_no,emp.email,emp.curr_location_name,
                    t1.animal_id FROM employee AS emp JOIN employee_rescue_table AS t1 ON emp.employee_id = t1.EmployeeID WHERE emp.curr_location_name LIKE '%$searchval%' or emp.employee_id = '$searchval'";

                }
                

                try{
                  $returnval=$dbcon->query($sqlquery); 
                  $employee=$returnval->fetchAll();

                    foreach($employee as $row){
                      ?>
                        <tr>
                            <td><?php echo $row['employee_id'] ?></td>   
                            <td><?php echo $row['name'] ?></td>   
                            <td><?php echo $row['phone_no'] ?></td>   
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['curr_location_name'] ?></td>
                            <td><?php echo $row['animal_id'] ?></td>
                        </tr>
                    <?php
                    }
                }
                catch(PDOException $ex){
                    ?>
                        <tr>
                            <td colspan="5">Data read error1 ... ...</td>    
                        </tr>
                    <?php
                }

            }
            catch(PDOException $ex){
                ?>
                    <tr>
                        <td colspan="5">Data read error ... ...</td>    
                    </tr>
                <?php
            }
        ?>
         </tbody>
        </table>
        <?php  
        }
        else{
            ?>
                <script>
                    window.location.assign('profile.php');
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