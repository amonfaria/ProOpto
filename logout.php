<?php
require_once("./include/membersite_config.php");

$fgmembersite->LogOut();
include_once('main-header.php');
?>

<body>
<?php 

include_once('main-menu.php');
?>


<div id='fg_membersite'class="splash-container-profile">
<div class="splash">

<h2>Logout com sucesso</h2>
<p>
<a href='signin.php'>Login Novamente</a>
</p>
</div>
</div>
</body>
</html>