<?php

    $connect = mysqli_connect('localhost', 'root', '', 'animal_rescue');


$search = $_POST['search'];


if(!empty($search)){

    $query = "SELECT * FROM adoption_table WHERE animal_type LIKE '$search%'";
    $search_query = mysqli_query($connect, $query);
  ?>
        <table>
    <thead>
    <tr>
    <th>Animal ID</th>
    <th>Animal Type</th>
    <th>Adoption Cost</th>
        <th>Age</th>
    </tr>
     </thead>
 <tbody>
<?php
    
  
    
    while( $row = mysqli_fetch_array($search_query) ){
        $animal_id=$row['animal_id'];
        $animal_type = $row['animal_type'];
        $adoption_cost=$row['adoption_cost'];
        $age=$row['age'];
       
        ?>
     
       <tr>
            <td><?php echo "$animal_id" ?></td>
             <td> <?php echo "$animal_type" ?></td>
              <td><?php echo "$adoption_cost" ?></td>
                 <td><?php echo "$age" ?></td>
          </tr> 
    

   
   
 
<?php
            }
    ?>
   </tbody> 
</table>
     
<?php
}

