
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoViewPost()">Acesso</a></li>
</form>
<form id="view_calendar" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_calendar'/>
<li><a href="javascript:DoCalPost()">Calendario</a></li>
</form>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoViewPost(){  
      $("#view_access").submit();  
   }
   function DoCalPost(){  
      $("#view_access").submit();  
   }
   function DoClinicPost(){  
      $("#view_access").submit();  
   }
   function DoFinancePost(){  
      $("#view_access").submit();  
   }

</script>


 