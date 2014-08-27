<style scoped>
.button-small {
            font-size: 85%;
            background-color: #ff7300;
            color: white;
     
            padding-right: 5px;
            padding-left: 5px;
        }

.button-small-cancel {

       font-size: 85%;
       background: rgb(202, 60, 60);
       
       color: white;

       padding-right: 5px;
       padding-left: 5px;


}
</style>


<div class="colRight">
<div>
    <div>
     <button href="#" class="button-small pure-button" data-toggle="modal" data-target="#basicModal">
     <i class="fa fa-plus-square fa-lg"></i>
     Novo
     
     </button>
     
     
     <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title" id="myModalLabel">Registrar Usuario Novo</h4>
           </div>
           <div class="modal-body">
             <form id="myform" method="get" action="something.php">
                 ADD REGISTRATION FIELDS HERE
                 <input type="text" name="name" />
            
             </form>
           </div>
           
           <div class="modal-footer">
             <button type="button" class="button-small-cancel pure-button" data-dismiss="modal">
             <i class="fa fa-trash fa-lg"></i>
             Cancelar
             </button>
             <button type="submit" form="myform" class="button-small pure-button">
             <i class="fa fa-check-square fa-lg"></i>
             Registrar
             </button>
           </div>
         </div>
       </div>
     </div>
        
    </div>
    
    </div>
</div>

<div class="colMid">
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Sobre Nome</th>
            <th>Email</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
    </thead>

    <tbody>
        

<?php

 $result = $fgmembersite->DisplayAccess();
if (count($result)) 
{ 
    foreach ($result AS $id => $data) 
    { 
        echo "<tr>";
        echo "<td> $data[name] </td>";
        echo "<td> $data[name] </td>";
        echo "<td> $data[email] </td>";
        echo '<td><button type="button" class="button-small-cancel pure-button"> <i class="fa fa-pencil fa-lg"></i> </button> </td>';
        echo '<td><button type="button" class="button-small-cancel pure-button"> <i class="fa fa-trash fa-lg"></i> </button> </td>';
        
        
        
        echo "</tr>";
    } 
} 


?>
 </tbody>
</table>
</div>