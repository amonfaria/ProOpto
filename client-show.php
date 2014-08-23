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
?>
<?php 

include_once('main-header.php');
?>
<body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a href="#" class="pure-menu-heading">ProOpto - Clinica</a>
    <ul>
        <li><a class="pure-menu-disabled" href="#">Calendario</a></li>
        <li><a class="pure-menu-disabled" href="#">Dotores</a></li>
        </ul>
</div>
</div>
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
<div class="splash-container-profile-right">
<img <?PHP echo "src='img/".$_SESSION['client_id'].".jpg'";?> alt="No Photo" class="resize img-thumbnail">
</div>
<div class="splash-container-profile-middle">
<legend>Dados Pessoais</legend>
<?PHP
    if(!$fgmembersite->GetPatientInfo()){
        echo "patient info not found";
        echo $_SESSION['client_id'];
        echo $fgmembersite->GetPatientInfo();
    }
    $row=$fgmembersite->GetPatientInfo();
    echo "Nome: " . $row['client_first_name'] . " " . $row['client_last_name'];
    echo "<br>";
    echo "Endereco: " . $row['address_street'] . ", " . $row['address_city'] . ", " . $row['address_state'];
    echo "<br>";
    echo "Fone: " . $row['client_phone'];
    echo "<br>";
    echo "Email: " . $row['client_email'];
    echo "<br>";
?>
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
