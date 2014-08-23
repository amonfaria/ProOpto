<head>
<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
<!--<![endif]-->

<script src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


</head>

<body>



      <ul class="nav navbar-nav navbar-right">
      <div class="row">
         <div class="container-fluid">
         <div class="clearfix hidden-xs">
         
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nome <span class="caret"></span></a>
          
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
          </div>
          <div class="clearfix visible-xs-block">
           
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nome <span class="caret"></span></a>
            
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
            </div>
        </li>
        </div>
        </div>
		</div>
      </ul>



<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div>
<div class="row">
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block">
  <div class="col-xs-6 col-sm-4">hidden?</div>
</div>
</div>

</body>

<script>

$('#cssmenu').prepend('<div id="menu-button">Menu</div>');
$('#cssmenu #menu-button').on('click', function(){
  var menu = $(this).next('ul');
  if (menu.hasClass('open')) {
    menu.removeClass('open');
  } else {
    menu.addClass('open');
  }
});
</script>