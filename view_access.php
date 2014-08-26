<?php 
   
   
   $result = $fgmembersite->DisplayAccess()
   
   while($row = mysqli_fetch_array($result)) {

     echo $row['name'];
     echo $row['email'];
   }
   

   
?>