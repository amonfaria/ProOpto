<?php 
  echo $_POST['client_search'];
  
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = $_POST['client_search'];
  fwrite($myfile, $txt);
  fclose($myfile);
 ?>