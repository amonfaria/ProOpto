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
        $fgmembersite->RedirectToURL("client-search.php");
   }else{
        $fgmembersite->RedirectToURL("client-add.php");
   }
}

include_once('main-header.php');
?>

<body>
<?php 

include_once('frozen-menu.php');
?>
<!-- Form Code Start -->
<div id='fg_membersite'class="splash-container-profile">
<div class="splash-portal">

<div class="profile-menu pure-menu pure-menu-open pure-menu-horizontal">
    <a href="#" class="pure-menu-heading">Site Title</a>

    <ul>
        <li class="pure-menu-selected"><a href="#">Home</a></li>
        <li><a href="#">Flickr</a></li>
        <li><a href="#">Messenger</a></li>
    </ul>
</div>


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
    
<form id="client_search" class=" pure-form pure-form-aligned" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='client_search' id='client_search' value='1'/>
<input type='hidden'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
        <input type="text" name="clientID" id="clientID" clientID placeholder ='Busca por CPF' required>
        <input id="client_search_button" class="pure-button pure-button-primary"  type='submit' name='Submit' value='Buscar' />
</fieldset>
</form>


</div>

</body>
</html>
