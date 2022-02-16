<?php

    session_start();

    if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
             ?> 
            <title>Animal Rescue Information</title>
            <table>
                <thead>
                    
                    <tr>
                        <th>Animal ID</th>
                        <th>Type</th>
                        <th>Age</th>
                        <th>Location</th>
                        <th>Rescue Date</th>
                        <th>Image</th>
                       
                    </tr>
                </thead>
                
                <tbody>
                 <?php
        
               try{
                            
                 $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
                 $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
             
                    $sqlquery="SELECT animal_id,animal_type,rescue_date,age,location_name,image FROM rescue_table";
                   
             

                try{
                  $returnval=$dbcon->query($sqlquery); 
                  $employee=$returnval->fetchAll();
              
                    foreach($employee as $row){
                      ?>
                        <tr>
                         <td><?php echo $row['animal_id'] ?></td>   
                            <td><?php echo $row['animal_type'] ?></td>   
                            <td><?php echo $row['age'] ?></td>   
                            <td><?php echo $row['location_name'] ?></td>  
                            <td><?php echo $row['rescue_date'] ?></td>
                           <td>
                            <img width="80" height="80" alt="Image Demo" src="<?php echo $row['image'] ?>">
                           </td> 
                            <td><a href="delete_animal.php?id=<?php echo $row['animal_id']; ?>">Delete</a></td>
                      </tr>
                            
                        
                    <?php
                    }
                }
                catch(PDOException $ex){
                    ?>
                        <tr>
                            <td colspan="4">Data read error1 ... ...</td>    
                        </tr>
                    <?php
                }

            }
            catch(PDOException $ex){
                ?>
                    <tr>
                        <td colspan="4">Data read error ... ...</td>    
                    </tr>
                <?php
            }
        ?>
        
         </tbody>
        </table>
       <br><br>
        <input type="button" value="add" id="addbtn">
        <script>
                var elm=document.getElementById('addbtn');
                elm.addEventListener('click', addprocess);
                
                function addprocess(){
                    window.location.assign('add_animal.php');
                }
                
            </script>
          <br><br><a href="employee_details.php"><b>Back</b></a>
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