<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive product landing page.">

    <title>Home &ndash; ProOpto</title>


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">

    


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
 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>




 
  



<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">


    

    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>

    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/grids-responsive-min.css">
  
<!--<![endif]-->

  

<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
<!--<![endif]-->


</head>


<body>





<nav class="navbar navbar-static-top" role="navigation">
  <div class="container">
  <a href="#" class="navbar-brand"> Zyne</a>
  <button class= "navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      
  </button>
  

  
  <div class="collapse navbar-collapse fullMenuTopCollapse">

      <ul class="nav navbar-nav navbar-right">
      <div class="Mobile is-center pure-menu visible-xs-block">
      
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoViewPost()">Acesso</a></li>
</form>
<form id="view_calendar" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_calendar'/>
<li><a href="javascript:DoCalPost()">Calendario</a></li>
</form>
<form id="view_clinic" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_calendar'/>
<li><a href="javascript:DoClinicPost()">Clinica</a></li>
</form>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoViewPost(){  
      $("#view_access").submit();  
   }
   function DoCalPost(){  
      $("#view_calendar").submit();  
   }
   function DoClinicPost(){  
      $("#view_clinic").submit();  
   }
   function DoFinancePost(){  
      $("#view_access").submit();  
   }

</script>


       </div>

        <li class="dropdown">
          <a href="#" class="Mobile dropdown-toggle" data-toggle="dropdown">Nome <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<ul>
<div class="portalMenu row hidden-xs">
    <div class="colLeft">
    <div class="pure-menu">
     
            
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoViewPost()">Acesso</a></li>
</form>
<form id="view_calendar" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_calendar'/>
<li><a href="javascript:DoCalPost()">Calendario</a></li>
</form>
<form id="view_clinic" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_calendar'/>
<li><a href="javascript:DoClinicPost()">Clinica</a></li>
</form>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoViewPost(){  
      $("#view_access").submit();  
   }
   function DoCalPost(){  
      $("#view_calendar").submit();  
   }
   function DoClinicPost(){  
      $("#view_clinic").submit();  
   }
   function DoFinancePost(){  
      $("#view_access").submit();  
   }

</script>


         
    </div>
    
    </div>
    

<div class="colRight">
<div>
    <div>
     <button href="#" class="button-small pure-button" data-toggle="modal" data-target="#basicModal">
     <i class="fa fa-plus-square fa-lg"></i>
     Novo
     
     </button>
     
     
     <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
             <h4 class="modal-title" id="myModalLabel">Registrar Usuario Novo</h4>
           </div>
           <div class="modal-body">
             <form id="myform" method="get" action="something.php">
                 ADD REGISTRATION FIELDS HERE
                 <input type="text" name="name" />
            
             </form>
           </div>
           
           <div class="modal-footer">
             <button type="button" class="button-small-red pure-button" data-dismiss="modal">
             <i class="fa fa-trash fa-lg"></i>
             Cancelar
             </button>
             <button type="submit" form="myform" class="button-small pure-button">
             <i class="fa fa-check-square fa-lg"></i>
             Registrar
             </button>
           </div>
         </div>
       </div>
     </div>
        
    </div>
    
    </div>
</div>

<div class="colMid">
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <label>Usuarios Ativos</label>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        

<tr><td> amon faria </td><td> amon faria </td><td> amon.faria@gmail.com </td><td><button type="button" data-toggle="tooltip" title="Editar" class="button-small-white pure-button"> <i class="fa fa-pencil fa-lg"></i> </button> </td><td><button type="button" data-toggle="tooltip" title="Deletar Usuario" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-trash fa-lg"></i> </button> </td></tr><tr><td> isaque </td><td> isaque </td><td> ifaria@gmail.com </td><td><button type="button" data-toggle="tooltip" title="Editar" class="button-small-white pure-button"> <i class="fa fa-pencil fa-lg"></i> </button> </td><td><button type="button" data-toggle="tooltip" title="Deletar Usuario" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-trash fa-lg"></i> </button> </td></tr> </tbody>
</table>

<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <label>Esperando Confirmação</label>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>


<tr id="amon"><td> amon faria </td><td> amon faria </td><td> amon.faria@gmail.com </td><td><button type="button"  rel="tooltip" data-toggle="modal" data-target="verify-delete-modal" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td><td><button type="button" data-toggle="modal" rel="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td></tr><tr id='36'><td> isaque </td><td> isaque </td><td> ifaria@gmail.com </td><td><button onclick="hide(36)" type="button" data-toggle="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td><td><button type="button" data-toggle="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td></tr>
 
 </tbody>
</table>

<div class="modal fade verify-delete-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      delete me?
    </div>
  </div>
</div>
<a href="#" data-toggle="tooltip" title="Aprovar Acesso" data-confirm="Are you sure you want to delete?">Delete</a>

<script>
$('[data-toggle="tooltip"]').tooltip({
    animated: 'fade',
    placement: 'top',
});
</script>
<script type="text/javascript">
function hide(el_id){
  var el=document.getElementById(el_id);
  if(el_id.style.display!="none"){
    el_id.style.display="none";
  }else{
    el_id.style.display="";
  }
}


$(document).ready(function() {
	$('a[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content">
			  <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			    </div>
			<div class="modal-body">Certeza que quer excluir?</div><br><div class="modal-footer"><button class="button-small-red pure-button pure-button-primary" data-dismiss="modal" aria-hidden="true">Nao</button><button class="button-small-green pure-button pure-button-primary" id="dataConfirmOK">Sim</button></div></div></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});

</script>

</div></div>
</div>

</ul>
<!-- Form Code Start -->

<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<!--
Form Code End (see html-form-guide.com for more info.)
-->

<div class="content-wrapper-profile content-wrapper">

<form id="client_search" class="pure-form pure-form-aligned" action='/profile-home.php' method='post' accept-charset='UTF-8'>
<fieldset >
<input type='hidden' name='client_search' id='client_search' value='1'/>
<input type='hidden'  class='spmhidip' name='spe8306af0d23b01a2bf7c1734aacf25fe' />
<div><span class='error'></span></div>
        <input type="text" class="content-leftalign content-fa-align" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." name="clientID" id="clientID" clientID placeholder ='Busca por CPF' required></input>

        <a class="blue btn" href="#"><i class="content-fa-align fa fa-arrow-circle-right fa-2x" type='submit' name='Submit' ></i></a>
</fieldset>
</form>
</div>

</body>
</html>
