<?php
 
// Use in the "Post-Receive URLs" section of your GitHub repo.

 
echo shell_exec("/full/path/to/bin/git pull 2>&1");
 

echo shell_exec("/usr/bin/git pull 2>&1"); 

?>
