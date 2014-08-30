<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <html>

  <style type="text/css">
  td{border:3px solid red;}
  </style>
  <script type="text/javascript">
  function hideShow(el_id){
    var el=document.getElementById(el_id);
    if(el_id.style.display!="none"){
      el_id.style.display="none";
    }else{
      el_id.style.display="";
    }
  }
  </script>

  <body>
<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <label>Esperando Confirmação</label>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>

    <tbody>


<tr id='amon'><td> amon faria </td><td> amon faria </td><td> amon.faria@gmail.com </td><td><button onclick='hideShow(amon)' type="button" data-toggle="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td><td><button type="button" data-toggle="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td></tr>

 
<tr id='ifaria@gmail.com'><td> isaque </td><td> isaque </td><td> ifaria@gmail.com </td><td><button id="ifaria@gmail.com" type="button" data-toggle="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> <i class="fa fa-times fa-lg"></i></button> </td><td><button type="button" data-toggle="tooltip" title="Aprovar Acesso" class="button-small-green-inverse pure-button green-tooltip"> <i class="fa fa-check fa-lg"></i> </button> </td></tr> 
 </tbody>
</table>
  </body>
  </html>