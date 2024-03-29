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
if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterClient())
   {
        $fgmembersite->RedirectToURL("client-search.php");

   }else{
        $fgmembersite->RedirectToURL("didntwork.php");
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
<div id='fg_membersite'class="splash-container-profile">
<div class="splash">
<form id='add_client' class="white-bg pure-form pure-form-stacked" action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='submitted' id='submitted' value='1'/>
<input type='hidden'  class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
      <legend>Cadastro</legend>
        <p> Por favor inserir os dados do paciente abaixo </p>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first_name">Primero Nome</label>
                <input name="first_name" id="first_name" type="text" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="last_name">Sobre Nome</label>
                <input name="last_name" id="last_name" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="occupation">Ocupacao</label>
                <input name="occupation" id="occupation" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="cpf">CPF</label>
                <input name="cpf" id="cpf" type="text" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="dob">Data de Nascimento</label>
                <input name="dob" id="dob" type="text" placeholder="DD/MM/AAAA" required>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="gender">Genero</label>
                <select name="gender" id="gender" class="pure-input-1-2">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="phone">Phone</label>
                <input name="phone" id="phone" type="text">
            </div>
           <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input name="email" id="email" type="email">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="street">Endereco (Rua)</label>
                <input name="street" id="street" type="text">
            </div>
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Endereco (Cidade)</label>
                <input name="city" id="city" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="state">Endereco (Estado)</label>
                <select name="state" id="state" class="pure-input-1-2">
                    <option value="GO">GO</option>
                    <option value="PE">PE</option>
                    <option value="MG">MG</option>
                    <option value="DF">DF</option>
                </select>
            </div>
        </div>

        <button type="submit" class="pure-button pure-button-primary">Seguir</button>
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
</div>

</body>
</html>
