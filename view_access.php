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
     <a href="#" class="button-small pure-button" data-toggle="modal" data-target="#basicModal">
     <i class="fa fa-plus-square fa-lg"></i>
     Novo
     
     </a>
     
     <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title" id="myModalLabel">Basic Modal</h4>
           </div>
           <div class="modal-body">
             <h3>Modal Body</h3>
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
        
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