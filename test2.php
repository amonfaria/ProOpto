<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
  <html>
  <head>
  <title>Untitled</title>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
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
  </head>
  <body>
  <table>
  <tr id="row1">
  <td>&nbsp;</td>
  </tr>
  <tr id="row2">
  <td>&nbsp;</td>
  </tr>
  <tr id="row3">
  <td>&nbsp;</td>
  </tr>
  </table>
  <a href="#" onclick="hideShow(row1);">Hide/Show Row 1</a><br />
  <a href="#" onclick="hideShow(row2);">Hide/Show Row 2</a><br />
  <a href="#" onclick="hideShow(row3);">Hide/Show Row 3</a><br />
  </body>
  </html>