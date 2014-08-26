<?php 
   
   
  
   
   while($row = $fgmembersite->DisplayAccess()) {

     echo "name" . $row['name'] . "h";
     echo "email" . $row['email'] . "h";
   }
   

   
?>