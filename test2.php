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



<form action ="#" method="POST">
<button class='btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete"><span class="fa fa-times"></span> delete</button>
</form>

<div id="confirm" class="modal hide fade">
  <div class="modal-body">
    Are you sure?
  </div>
  <div class="modal-footer">
    <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
  </div>
</div>


<script>
$('button[name="remove_levels"]').on('click', function(e){
    var $form=$(this).closest('form');
    e.preventDefault();
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .one('click', '#delete', function (e) {
            $form.trigger('submit');
        });
});

function hide(el_id){
  var el=document.getElementById(el_id);
  if(el_id.style.display!="none"){
    el_id.style.display="none";
  }else{
    el_id.style.display="";
  }
}
$(document).ready(function(){
    $("[rel=tooltip]").tooltip({ placement: 'top'});
});

$(document).ready(function() {
	$('[data-confirm]').click(function(ev) {
		var href = $(this).attr('href');
		if (!$('#dataConfirmModal').length) {
			$('body').append('<div id="dataConfirmModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog modal-sm"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title" id="myModalLabel">Excluir?</h4></div><div class="modal-body">Certeza que quer excluir?</div><div class="modal-footer"><button class="button-small-green pure-button" data-dismiss="modal" type="button" aria-hidden="true">Cancelar</button><button type="submit" class="button-small-red pure-button " id="dataConfirmOK">Excluir</button></div></div>');
		} 
		$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
		$('#dataConfirmOK').attr('href', href);
		$('#dataConfirmModal').modal({show:true});
		return false;
	});
});

</script>

</div></body>
</html>
