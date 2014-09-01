<?php 
  echo $_POST['action'];
  
  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt = $_POST['action'];
  fwrite($myfile, $txt);
  fclose($myfile);
 ?>