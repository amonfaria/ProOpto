
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
             <button type="button" class="button-small-red pure-button" data-dismiss="modal">
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
            <label>Usuarios Ativos</label>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
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
        echo '<td><button type="button" data-toggle="tooltip" title="Editar" class="button-small-white pure-button"> <i class="fa fa-pencil fa-lg"></i> </button> </td>';
        echo '<td><button type="button" data-toggle="tooltip" title="Deletar Usuario" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-trash fa-lg"></i> </button> </td>';
        
        
        
        echo "</tr>";
    } 
} 


?>
 </tbody>
</table>

<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <label>Esperando Confirmação</label>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
    <div id="hideme">

<?php

 $result = $fgmembersite->DisplayAccess();
if (count($result)) 
{ 
    $acceptstr = 'accept-hide1';
    $rejectstr = 'reject-hide1';
    
    foreach ($result AS $id => $data) 
    { 
        
        echo "<tr>";
        echo "<div id='.$rejectstr.'>";
        echo "<td> $data[name] </td>";
        echo "<td> $data[name] </td>";
        echo "<td> $data[email] </td>";
        echo '<td><button onclick="hide("'.$rejectstr.'")type="button" data-toggle="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td>';
        echo '<td><button type="button" data-toggle="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td>';
        echo "</div>";
        
        
        $acceptstr++;
        $rejectstr++;
        echo "</tr>";
    } 
} 


?>

    </div>
 </tbody>
</table>

<script>
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
});

function hide(target) {
    document.getElementById(target).style.display = 'none';
}

</script>

</div>