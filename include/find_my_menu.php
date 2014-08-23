<?php 
function GetMenu($userClass)
   {
        if ($userClass=="admin"){
            include_once('menu-admin.php');
        }
        elseif ($userClass=="receptionist"){
            include_once('menu-receptionist.php');
        }
        elseif ($userClass=="doctor"){
            include_once('menu-doctor.php');
        }
        elseif ($userClass=="doctor_admin"){
            include_once('menu-doctor-admin.php');
        }
        elseif ($userClass=="receptionist_admin"){
            include_once('menu-receptionist-admin.php');
        }

   }
?>