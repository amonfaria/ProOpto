<?php 
  echo $_POST['value'];
  
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = $_POST['name'];
  fwrite($myfile, $txt);
  fclose($myfile);
 ?>