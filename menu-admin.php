<form action="profile-home.php" method="post">
<li><a name="view_access">Acesso</a></li>
<input type='hidden' name='client_search' id='client_search' value='1'/>
</form>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 

   function DoPostViewAccess(){
      $.post("profile-home.php", { name: "view_access", value: "view_access" } );  //Your values here..
   }

</script>


 