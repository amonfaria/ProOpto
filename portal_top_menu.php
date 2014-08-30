

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
      <?php
      GetMenu($fgmembersite->UserClass())
      ?>
      </div>
<div class="dropdown">
  <button class="Mobile btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
    Dropdown
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
    <li role="presentation" class="divider"></li>
    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
  </ul>
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




