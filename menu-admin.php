
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoPost()">Acesso</a></li>
</form>
<form id="view_calendar" action="profile-home.php" method="post">
<input type='hidden' name='view_calendar' id='view_calendar' value='view_access'/>
<li><a href="javascript:DoPost()">Calendario</a></li>
</form>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoPost(){  
      $("form").submit();  
   }

</script>


 