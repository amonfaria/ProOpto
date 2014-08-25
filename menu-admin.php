
<li><a id="view_access" href="javascript:DoPostViewAccess()">Acesso</a></li>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 
   function DoPostViewAccess(){  
      $.post("profile-home.php", { name:"view_access", value: "view_access" } );  
   }

</script>


 