<div class="portalMenu ">
    <div class="pure-menu">
     <form id="view_access" action="profile-home.php" method="post">
     <input type='hidden' name='view_access' id='view_access' value='view_access'/>
     <li><a id="view_access" href="javascript:DoViewPost()">Adicionar</a></li>
     </form>
        
    </div>
    
    </div>
</div>
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