<?php 
function GetMenu($userClass)
   {
        if ($userClass=="admin"){
            include('menu-admin.php');
        }
        else{
            include('main-menu.php');
        }

   }
?>