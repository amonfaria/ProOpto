<form action="profile-home.php" method="post">
<li><a name="view_access" href="javascript:DoPostViewAccess()">Acesso</a></li>

<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>
</form>

<script language="javascript"> 

   function DoPostViewAccess(){
      $.post("profile-home.php", { name: "view_access", value: "view_access" } );  //Your values here..
   }

</script>


 