

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
      <div class="pure-menu visible-xs-block">
      <?php
      GetMenu($fgmembersite->UserClass())
      ?>
      </div>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nome <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a class="is-center" href="#">Settings</a></li>
            <li><a class="is-center" href="#">Another action</a></li>
            <li><a class="is-center" href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a class="is-center" href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




