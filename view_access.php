<?php 

   
   while($row = $fgmembersite->DisplayAccess()) {

     echo "" . $row['name'] . "";
     echo "" . $row['email'] . "";
     echo "";
   }
   

   
?>