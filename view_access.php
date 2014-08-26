<?php 
   
   
   $result=array();
   $result = $fgmembersite->DisplayAccess();
   foreach ($result AS $id => $data) 
       { 
           echo "Sender: $data[name], Subject: $data[email]<br />\n"; 
       } 
   

   
?>