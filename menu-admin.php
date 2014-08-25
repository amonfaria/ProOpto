
<li><a id="view_access" href="#">Acesso</a></li>
<li><a href="#">Calendario</a></li>
<li><a href="#">Clinica</a></li>
<li><a href="#">Finance</a></li>


<script type="text/javascript">
     $(document).ready(function () { 
          $('a#view_acces').click(function() {
               $('body').append($('<form/>', {
                    id: 'form',
                    method: 'POST',
                    action: 'profile-home.php'
               }));

               $('#form').append($('<input/>', {
                    type: 'hidden',
                    name: 'view_access',
                    value: '1'
               }));

               $('#form').submit();

               return false;
          });
     } );
</script>


 