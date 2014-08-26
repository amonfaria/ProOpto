<?php 
   
   
   $result = $fgmembersite->DisplayAccess()
   
   while($row = $result) {

     echo "" . $row['name'] . "";
     echo "" . $row['email'] . "";
   }
   

   
?>