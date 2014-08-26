<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterCompany())
   {
        $fgmembersite->RedirectToURL("profile-home.php");

   }else{
        $fgmembersite->RedirectToURL("didntwork.php");
   }
}
ini_set('display_errors', 'On');
error_reporting(E_ALL);


include_once('main-header.php');


?>

<body>
<?php 

include_once('frozen-menu.php');
?>
<!-- Form Code Start -->

<div id='fg_membersite'class="splash-container">
<div class="splash">
<form id='add_company' class="pure-form pure-form-aligned" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
        <p> Por favor inserir os dados da sua clinica abaixo </p>
        <div>
        <input type="text" name="clinicID" id="clinicID" placeholder='"TAX ID" da Clinica' required>
        </div>
        <div>
        <input type="text" name="clinicName" id="clinicName" placeholder='Nome da Clinica' required>
       </div>
        <div>
        <input type="text" name="clinicPhone" id="clinicPhone" placeholder='Telefone' required>
        </div>
        <div>
        <input type="text" name="clinicStreet" id="clinicStreet" placeholder='Rua (Endereco)' required>
       </div>
        <div>
        <input type="text" name="clinicCity" id="clinicCity" placeholder='Cidade (Endereco)' required>
        </div>
        <div>
        <input type="text" name="clinicZip" id="clinicZip" placeholder='CEP (Endereco)' required>
       </div>
        <input class="button-whitebg pure-button pure-button-primary"  type='submit' name='Submit' value='Seguir' />
</fieldset>
</form>
</div>
</div>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->


<!--
Form Code End (see html-form-guide.com for more info.)
-->
</body>
</html>
