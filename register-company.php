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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <script src="http://yui.yahooapis.com/3.17.2/build/yui/yui-min.js"></script>
<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
  
<!--<![endif]-->



  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/marketing.css">
    <!--<![endif]-->
  



<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a href="#" class="pure-menu-heading">ProOpto - Clinica</a>
    <ul>
        <li><a class="pure-menu-disabled" href="#">Calendario</a></li>
        <li><a class="pure-menu-disabled" href="#">Doutores</a></li>
        <li><a class="pure-menu-disabled" href="#">Novo Paciente</a></li>
        </ul>
</div>
</div>
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
