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
   
function ViewAccess($userClass)
    {
        if ($userClass=="admin"){
            include('view_access.php');
        }
        else{
            include('not_authorized.php');
    }
    

    }


?>