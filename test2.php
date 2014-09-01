<?php
    include("main-header.php");
    require_once('delete_confirm.php');
    
?>

<form method="POST" action="test3.php" accept-charset="UTF-8">
<input type='hidden' name='client_search' id='client_search' value='amon'/>
    <button class="btn btn-xs btn-danger" type="button" data-toggle="modal" name="amon" value="amon" data-target="#confirmDelete" data-title="Delete User" data-message="Tem certeza que quer excluir usuario? ?">
        <i class="glyphicon glyphicon-trash"></i> Excluir
    </button>
</form>