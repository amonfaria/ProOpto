
<form id="view_access" action="profile-home.php" method="post">
<input type='hidden' name='view_access' id='view_access' value='view_access'/>
<li><a id="view_access" href="javascript:DoPostViewAccess()">Acesso</a></li>
</form>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoPostViewAccess(){  
      $("form").submit();  
   }

</script>


 