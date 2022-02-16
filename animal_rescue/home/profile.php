
<?php
            session_start();
   if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
 
       ?>
             <title>Profile</title>
                    <?php
                        $var=$_SESSION['email'];
                        
                       
                    try{
                            
                    $dbcon = new PDO("mysql:host=localhost:3310;dbname=animal_rescue;","root","");
                    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $sqlquery="SELECT employee_id,name,rank,phone_no,email,curr_location_name FROM employee WHERE email='$var' ";

                    try{
                        $returnval=$dbcon->query($sqlquery); 

                        $employee=$returnval->fetchAll();

                       foreach($employee as $row){
                                   ?>

                            <h1> Profile Details</h1>

                             Employee ID : <?php echo $row['employee_id'] ?> <br>  
                             Name : <?php echo $row['name'] ; ?> <br>
                             Phone No: <?php echo $row['phone_no'] ; ?> <br>
                             Email : <?php echo $row['email']; ?> <br>  
                             Location : <?php echo $row['curr_location_name'] ; ?> <br>

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

                    }
                    catch(PDOException $ex){
                        ?>
                            <tr>
                                <td colspan="4">Data read error ... ...</td>    
                            </tr>
                        <?php
                            }
                        ?>
                
            <br>
            <input type="button" value="Update Profile" id="updatebttn">
            <br>
            <script>
                var uptbtn=document.getElementById('updatebttn');
                uptbtn.addEventListener('click', updateprocess);
                
                function updateprocess(){
                    window.location.assign('update_profile.php');
                }
           </script>
            <?php 
             foreach($employee as $row){
              if( ( $row['rank'] ) ==1){ ?>
                  <input type="search" id="searchbox">
                  <input type="button" value="Search" id="searchbtn">

                 <br><br>
                    <script>
                        var srcbtn=document.getElementById('searchbtn');
                        srcbtn.addEventListener('click', searchprocess);

                        function searchprocess(){
                            var searchvalue=document.getElementById('searchbox').value;
                            window.location.assign("searchpage.php?param1="+searchvalue);
                        }
                   </script> 
                        <?php    } }?>
                    
            
            <input type="button" value="Logout" id="logoutbtn">

            <script>
                var elm=document.getElementById('logoutbtn');
                elm.addEventListener('click', processlogout);
                
                function processlogout(){
                    window.location.assign('logout1.php');
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