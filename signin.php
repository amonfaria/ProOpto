<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("profile-home.php");
   }
}
if($fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("profile-home.php");
    exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
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



</head>
<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Pro Opto</a>

        <ul>
            <li class="pure-menu-selected"><a href="index.php">Home</a></li>
            <li><a href="#">Tour</a></li>
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="registrar.php">Registrar</a></li>
        </ul>
    </div>
</div>
<!-- Form Code Start -->
<div id='fg_membersite'class="splash-container">
<div class="splash">
<form id='login' class="pure-form pure-form-aligned" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1'/>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class="pure-control-group">
    <input type='email' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" placeholder="Usuario" required>
    <span id='login_username_errorloc' class='error'></span>
</div>
<div class="pure-control-group">
    <input type='password' name='password' id='password' maxlength="50" placeholder="Senha" required>
    <span id='login_password_errorloc' class='error'></span>
</div>

    <input class="button-whitebg pure-button pure-button-primary"  type='submit' name='Submit' value='Entrar' />
<div class='small-text short_explanation'><a href='reset-pwd-req.php'>Esqueceu Senha?</a></div>
</div>
</div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->
<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Leia Mais.</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Cadastre-se em 1 minuto
                </h3>
                <p>
                    Aplique hoje e nao perca.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Propaganda aqui
                </h3>
                <p>
                    Poe propaganda aqui.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Modular
                </h3>
                <p>
                    Poe propaganda aqui.
                </p>
            </div>

            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Escolha seu plano hoje
                </h3>
                <p>
                    Propaganda aqui.
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img class="pure-img-responsive" alt="File Icons" width="300" src="img/common/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Ribbon aqui.</h2>

            <p>
                Ribbon
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">propagandas e propagandas.</h2>

        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-md-2-5">
                <form class="pure-form pure-form-stacked">
                    <fieldset>
                                            
                        <label for="name">Nome</label>
                        <input id="name" type="text" placeholder="Your Name">


                        <label for="email">Email</label>
                        <input id="email" type="email" placeholder="Your Email">

                        <label for="password">Senha</label>
                        <input id="password" type="password" placeholder="Your Password">

                        <button type="submit" class="pure-button">Registrar</button>
                    </fieldset>
                </form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Contato</h4>
                <p>
                    Escrever sobre contato

                </p>

                <h4>Mais informacoes</h4>
                <p>
                    Mais informacoes aqui
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        Ligue ja e entre em contato com nossa equipe.
    </div>

</div>
</body>
</html>
