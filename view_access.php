<?php
    require_once("delete_confirm.php");
?>

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
        echo "<td class='medsize'> $data[name] </td>";
        echo "<td class='medsize'> $data[name] </td>";
        echo "<td class='medsize'> $data[email] </td>";
        echo '<td class="medsize"><button type="button" rel="tooltip" title="Editar" class="button-small-white pure-button"> <i class="fa fa-pencil fa-lg"></i> </button> </td>';
        echo '<td class="medsize"><form method="POST" action="profile-home.php" accept-charset="UTF-8"><input type="hidden" name="user_delete" id="user_delete" value="'."$data[username]".'"/><button type="button" rel="tooltip" title="Deletar Usuario" data-toggle="modal" data-target="#confirmDelete" data-title="Excluir Usuario" data-message="Tem certeza que quer excluir usuario ?" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-trash fa-lg"></i> </button></form> </td>';
        
        
        
        echo "</tr>";
    } 
} 


?>
 </tbody>
</table>


<?php

 $result = $fgmembersite->DisplayAccess();
if (count($result)) 
{ 
    echo " <table class='pure-table pure-table-horizontal'>
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
    
        <tbody>";

    
    foreach ($result AS $id => $data) 
    { 

        echo "<tr id='$data[username]'>";
        
        echo "<td class='medsize'> $data[name] </td>";
        echo "<td class='medsize'> $data[name] </td>";
        echo "<td class='medsize'> $data[email] </td>";
        echo '<td class="medsize"><button onclick="hide('."$data[username]".')" type="button" rel="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td>';
        echo '<td class="medsize"><button onclick="hide('."$data[username]".')" type="button" rel="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td>';
        
        echo '';

        echo "</tr>";
        

    } 
} 


?>

 
 </tbody>
</table>

<script>
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
});

function hide(el_id){
  var el=document.getElementById(el_id);
  if(el_id.style.display!="none"){
    el_id.style.display="none";
  }else{
    el_id.style.display="";
  }
}
$(document).ready(function(){
    $("[rel=tooltip]").tooltip({ placement: 'top'});
});

$(document).ready(function() {
	$('[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel">Excluir?</h4></div><div class="modal-body">Certeza que quer excluir?</div><div class="modal-footer"><button class="button-small-green pure-button" data-dismiss="modal" type="button" aria-hidden="true">Cancelar</button><button type="submit" class="button-small-red pure-button " id="dataConfirmOK">Excluir</button></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});

</script>

</div>