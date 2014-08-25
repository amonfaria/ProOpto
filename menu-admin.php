
<li><a id="view_access" href="profile-home.php">Acesso</a></li>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script language="javascript"> 


   function DoPostViewAccess(){
      alert("I am an alert box!");
      $.post("profile-home.php", { name: "view_access", value: "view_access" } );  //Your values here..
   }

</script>


 