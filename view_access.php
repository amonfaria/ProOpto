<?php 
   
   
   $result = $fgmembersite->DisplayAccess()
   
   while($row = mysqli_fetch_assoc($result)) {

     echo "" . $row['name'] . "";
     echo "" . $row['email'] . "";
   }
   

   
?>