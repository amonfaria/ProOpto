
<li><a name="view_access" href="profile-home.php?view_access=1">Acesso</a></li>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 

   function DoPostViewAccess(){
      $.post("profile-home.php", { name: "view_access", value: "view_access" } );  //Your values here..
   }

</script>


 