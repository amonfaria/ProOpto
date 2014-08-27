<style scoped>
.button-small {
            font-size: 85%;
            background-color: #ff7300;
            color: white;
     
            padding-right: 5px;
            padding-left: 5px;
        }

</style>

<div class="colRight">
<div>
    <div>
     <form id="view_access" action="profile-home.php" method="post">
     <input type='hidden' name='view_access' id='view_access' value='view_access'/>
     <button class="button-small pure-button">
     <i class="fa fa-plus-square fa-lg"></i>
     Novo
     
     </button>
     </form>
        
    </div>
    
    </div>
</div>



<?php
echo '<div class="colMid">';
 $result = $fgmembersite->DisplayAccess();
if (count($result)) 
{ 
    foreach ($result AS $id => $data) 
    { 
        echo "Sender: $data[name], Subject: $data[email]<br />\n"; 
    } 
} 
echo '</div>';

?>