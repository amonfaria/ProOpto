<?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("signin.php");
    exit;
}
if(isset($_POST['client_search']))
{
   if($fgmembersite->ClientSearch())
   {
        $fgmembersite->RedirectToURL("client-show.php");
   }else{
        $fgmembersite->RedirectToURL("client-add.php");
   }
}

include_once('main-header.php');

?>

<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php 

include_once('frozen-menu.php');
?>
<!-- Form Code Start -->
<div id='fg_membersite'class="splash-container-profile-left">
<div class=" splash-left btn-group">
  <a class="paciente btn" href="#"><i class="fa fa-user fa-fw"></i>Paciente</a>
  <a class="paciente btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-caret-down"></span></a>
  <ul class="dropdown-menu">
    <li><a href="#"><i class="fa fa-folder-open fa-fw"></i> Fixa</a></li>
    <li><a href="#"><i class="fa fa-calendar fa-fw"></i> Agendar</a></li>
    <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Editar</a></li>
    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Deletar</a></li>
  </ul>
</div>
</div>
<div class="splash-container-profile-middle">
<legend>Procura de Paciente</legend>
Por Favor inserir dados abaixo
</p>
</div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<!--
Form Code End (see html-form-guide.com for more info.)
-->

<div class="content-wrapper-profile content-wrapper">

<form id="client_search" class="pure-form pure-form-aligned" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='client_search' id='client_search' value='1'/>
<input type='hidden'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
        <input type="text" class="content-leftalign content-fa-align" name="clientID" id="clientID" autocomplete="off" clientID placeholder ='Busca por CPF' required></input>

        <a class="blue btn" href="#"><i class="content-fa-align fa fa-arrow-circle-right fa-2x" type='submit' name='client_search' ></i></a>
</fieldset>
</form>


</div>

</body>
</html>
