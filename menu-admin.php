
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoPost()">Acesso</a></li>
</form>
<li><a href="javascript:DoPost()">Calendario</a></li>

<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
function DoPost(){
     $.post("profile-home.php", { name: "view_calendar", value: "view_calendar" id= "view_caendar"} );  //Your values here..
  }

</script>


 