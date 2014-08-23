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
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Link</a></li>
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
  <li><a href="#">Action</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li><a href="#">Separated link</a></li>
  <li class="divider"></li>
  <li><a href="#">One more separated link</a></li>
</ul>
 </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


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