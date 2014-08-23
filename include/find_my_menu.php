<?php 
function GetMenu($userClass)
   {
        if ($userClass=="admin"){
            include_once('menu-admin.php');
        }
        else{
            include_once('main-menu.php');
        }

   }
?>