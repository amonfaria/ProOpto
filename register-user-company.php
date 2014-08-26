<?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("/login/signin/login.php");
    exit;
}
if(isset($_POST['submitted']))
{
   if($fgmembersite->LinkToCompany())
   {
        $fgmembersite->RedirectToURL("profile-home.php");

   }else {
        $fgmembersite->RedirectToURL("register-company.php");
   }
}
include_once('main-header.php');


?>

<body>
<?php 

include_once('frozen-menu.php');
?>
<!-- Form Code Start -->

<div id='fg_membersite'class="splash-container">
<div class="splash">
<form id='register_company' class="pure-form pure-form-aligned" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>

        <div>
          <p> Por favor registrar a sua clinica para este usuario</p>
          <p> Precisamos do "Tax ID" da clinica</p>
        </div>
        <input type="text" name="clinicID" id="clinicID" placeholder="Cadastro da Clinica" required>
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
