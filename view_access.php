<?php 
   
   
  
   $result = $fgmembersite->DisplayAccess()
   foreach ($result as $row)  {

     echo "name" . $row['name'] . "h";
     echo "email" . $row['email'] . "h";
   }
   

   
?>