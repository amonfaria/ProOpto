<?PHP
require_once("./include/membersite_config.php");

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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>
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
<div id='fg_membersite'class="splash-container-profile">
<div class="splash">


</CENTER>

HTML is really a very simple language. It consists of ordinary text, with commands that are enclosed by "<" and ">" characters, or bewteen an "&" and a ";". <P>
 

You don't really need to know much HTML to create a page, because you can copy bits of HTML from other pages that do what you want, then change the text!<P>
 

This page shows on the left as it appears in your browser, and the corresponding HTML code appears on the right. The HTML commands are linked to explanations of what they do.
 

 

<H3>Line Breaks</H3>

HTML doesn't normally use line breaks for ordinary text. A white space of any size is treated as a single space. This is because the author of the page has no way of knowing the size of the reader's screen, or what size type they will have their browser set for.<P>

 

If you want to put a line break at a particular place, you can use the "<BR>" command, or, for a paragraph break, the "<P>" command, which will insert a blank line. The heading command ("<4></4>") puts a blank line above and below the heading text.

 

<H4>Starting and Stopping Commands</H4>

Most HTML commands come in pairs: for example, "<H4>" marks the beginning of a size 4 heading, and "</H4>" marks the end of it. The closing command is always the same as the opening command, except for the addition of the "/".<P>

 

Modifiers are sometimes included along with the basic command, inside the opening command's < >. The modifier does not need to be repeated in the closing command.

 

 

<H1>This is a size "1" heading</H1>

<H2>This is a size "2" heading</H2>

<H3>This is a size "3" heading</H3>

<H4>This is a size "4" heading</H4>

<H5>This is a size "5" heading</H5>

<H6>This is a size "6" heading</H6>

<center>

<H4>Copyright © 1997, by
<A HREF="http://sheldonbrown.com/index.html">Sheldon Brown</A>
</H4>

If you would like to make a link or bookmark to this page, the URL is:<BR> http://sheldonbrown.com/web_sample1.html

</fieldset>
</form>
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
        <input type="text" class="content-leftalign content-fa-align" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." name="clientID" id="clientID" clientID placeholder ='Busca por CPF' required></input>

        <a class="blue btn" href="#"><i class="content-fa-align fa fa-arrow-circle-right fa-2x" type='submit' name='Submit' ></i></a>
</fieldset>
</form>
</div>

</body>
</html>
