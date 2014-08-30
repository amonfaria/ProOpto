<?php
require_once("./include/membersite_config.php");
include("./include/find_my_menu.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("signin.php");
    exit;
}
if($fgmembersite->UserFirstLogin())
{
    echo $_SESSION['user_first_login'];
    $fgmembersite->RedirectToURL("register-user-company.php");
    exit;
}
if(isset($_POST['client_search']))
{
   if($fgmembersite->ClientSearch())
   {
        $fgmembersite->RedirectToURL("client-search.php");
        exit;
   }else{
        $fgmembersite->RedirectToURL("client-add.php");
        exit;
   }
}
include_once('main-header.php');
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<body>



<?php
include_once('portal_top_menu.php');

?>
<ul>
<div class="portalMenu row hidden-xs">
    <div class="colLeft">
    <div class="pure-menu">
     
            <?php
            GetMenu($fgmembersite->UserClass())
            ?>
        
    </div>
    
    </div>
    
<?php

if(isset($_POST['view_access']))
{
    
    include("view_access.php");
    
   
}

if(isset($_POST['view_calendar']))
{
    echo "Viewing calendar";

}
?>
</div>
</div>

</ul>
<!-- Form Code Start -->

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
        <input type="text" class="content-leftalign content-fa-align" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." name="clientID" id="clientID" clientID placeholder ='Busca por CPF' required></input>

        <a class="blue btn" href="#"><i class="content-fa-align fa fa-arrow-circle-right fa-2x" type='submit' name='Submit' ></i></a>
</fieldset>
</form>
</div>

</body>
</html>
