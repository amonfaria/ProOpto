<?php 
   
   

   $result = $fgmembersite->DisplayAccess();
if (count($result)) 
{ 
    foreach ($result AS $id => $data) 
    { 
        echo "Sender: $data[name], Subject: $data[email]<br />\n"; 
    } 
} 

   
?>